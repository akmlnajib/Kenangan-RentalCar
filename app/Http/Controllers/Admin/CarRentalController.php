<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarRental;

class CarRentalController extends Controller
{
    public function index()
    {
        $carRentals = CarRental::with('car')->get();
        return view('admin.car_rental.index', compact('carRentals'));
    }

    public function create()
    {
        $cars = Car::all();
        return view('admin.car_rental.create', compact('cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'rental_time' => 'required|string|max: 25',
            'rental_car_price' => 'required|numeric|min:0',
            'rental_driver_price' => 'required|numeric|min:0',
        ]);

        try {
            CarRental::create($request->all());
            return redirect()->route('admin.car_rental.index')->with('success', 'Data sewa mobil berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Terjadi kesalahan saat menambahkan data!');
        }

    }

    public function edit(CarRental $carRental)
    {
        $cars = Car::all();
        return view('admin.car_rental.edit', compact('carRental', 'cars'));
    }

    public function update(Request $request, CarRental $carRental)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'rental_time' => 'required|string|max:25',
            'rental_car_price' => 'required|numeric|min:0',
            'rental_driver_price' => 'required|numeric|min:0',
        ]);

        try {
            $carRental->update($request->all());
            return redirect()->route('admin.car_rental.index')->with('success', 'Data sewa mobil berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Terjadi kesalahan saat memperbarui data!');
        }
    }

    public function destroy(CarRental $carRental)
    {
        try {
            $carRental->delete();
            return redirect()->route('admin.car_rental.index')->with('success', 'Data sewa mobil berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Terjadi kesalahan saat menghapus data!');
        }
    }
}
