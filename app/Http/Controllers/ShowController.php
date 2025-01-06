<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Custom;

class ShowController extends Controller
{
    public function index()
{
    $custom = Custom::first();

    if ($custom) {
        $custom->no_tlpn_first = $this->formatPhoneNumberWithSpace($custom->no_tlpn_first);
        $custom->no_tlpn_first_space = $this->formatPhoneNumberWithoutSpace($custom->no_tlpn_first);
        $custom->no_tlpn_second = $this->formatPhoneNumberWithSpace($custom->no_tlpn_second);
        $custom->no_tlpn_second_space = $this->formatPhoneNumberWithoutSpace($custom->no_tlpn_second);
    }

    $cars = Car::with(['carRental'])->get();

    return view('index', compact('cars', 'custom'));
}

private function formatPhoneNumberWithSpace($number)
{
    $number = preg_replace('/\D/', '', $number);

    if (substr($number, 0, 1) === '0') {
        $number = '+62' . substr($number, 1);
    } elseif (substr($number, 0, 2) === '62') {
        $number = '+62' . substr($number, 2);
    } elseif (substr($number, 0, 3) !== '+62') {
        $number = '+62' . $number;
    }

    return preg_replace('/(\+62)(\d{3})(\d{4})(\d+)/', '$1 $2 $3 $4', $number);
}

private function formatPhoneNumberWithoutSpace($number)
{
    $number = preg_replace('/\D/', '', $number);

    if (substr($number, 0, 1) === '0') {
        $number = '+62' . substr($number, 1);
    } elseif (substr($number, 0, 2) === '62') {
        $number = '+62' . substr($number, 2);
    } elseif (substr($number, 0, 3) !== '+62') {
        $number = '+62' . $number;
    }

    return preg_replace('/(\+62)(\d{3})(\d{4})(\d+)/', '$1$2$3$4', $number);
}

}
