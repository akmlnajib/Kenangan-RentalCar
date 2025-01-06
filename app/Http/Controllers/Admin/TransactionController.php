<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Car;
use App\Models\Custom;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('car')->orderBy('created_at', 'desc')->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    public function create()
    {
        $cars = Car::all();
        return view('admin.transactions.create', compact('cars'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_penyewa' => 'required|string|max:255',
        'jaminan' => 'required|string|max:255',
        'no_identitas' => 'required|string|max:255',
        'no_tlpn' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'cars_id' => 'required|exists:cars,id',
        'nopol' => 'required|string|max:20',
        'rental_hours' => 'nullable|numeric',
        'rental_time' => 'required|in:Jam,Hari,Bulan',
        'rental_car' => 'required|numeric|min:0',
        'rental_driver' => 'nullable|numeric|min:0',
        'date_checkin' => 'nullable|date|required_if:rental_time,Hari|required_if:rental_time,Bulan',
        'date_checkout' => 'nullable|date|after_or_equal:date_checkin|required_if:rental_time,Hari|required_if:rental_time,Bulan',
    ]);

    $lastInvoiceNumber = Transaction::count() + 1;

    $nextInvoice = 'KRC-' . str_pad($lastInvoiceNumber, 4, '0', STR_PAD_LEFT);

    $rentalTime = $validated['rental_time'];
    $rentalCar = $validated['rental_car'];
    $rentalDriver = $validated['rental_driver'] ?? 0;

    $totalDays = $rentalTime !== 'Jam'
        ? Carbon::parse($validated['date_checkin'])->diffInDays(Carbon::parse($validated['date_checkout'])) + 1
        : 0;

    $totalTransaksi = $rentalTime === 'Jam'
        ? $rentalCar + $rentalDriver
        : ($rentalCar + $rentalDriver) * $totalDays;

    $transaction = Transaction::create([
        'nama_penyewa' => $validated['nama_penyewa'],
        'jaminan' => $validated['jaminan'],
        'no_identitas' => $validated['no_identitas'],
        'no_tlpn' => $validated['no_tlpn'],
        'alamat' => $validated['alamat'],
        'cars_id' => $validated['cars_id'],
        'nopol' => $validated['nopol'],
        'rental_hours' => $rentalTime === 'Jam' ? $validated['rental_hours'] : null,
        'rental_time' => $rentalTime,
        'rental_car' => $rentalCar,
        'rental_driver' => $rentalDriver,
        'date_checkin' => $rentalTime !== 'Jam' ? $validated['date_checkin'] : null,
        'date_checkout' => $rentalTime !== 'Jam' ? $validated['date_checkout'] : null,
        'total_date' => $totalDays,
        'total_transaksi' => $totalTransaksi,
        'invoice' => $nextInvoice,
    ]);

    return redirect()->route('admin.transactions.index')->with('success', 'Transaction saved successfully.');
}



    public function show(Transaction $transaction)
    {
        $custom = Custom::first();
        return view('admin.transactions.show', compact('transaction', 'custom'));
    }

    public function edit(Transaction $transaction)
    {
        $cars = Car::all();
        return view('admin.transactions.edit', compact('transaction', 'cars'));
    }

    public function update(Request $request, Transaction $transaction)
{
    $validated = $request->validate([
        'nama_penyewa' => 'required|string|max:255',
        'jaminan' => 'required|string|max:255',
        'no_identitas' => 'required|string|max:255',
        'no_tlpn' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'cars_id' => 'required|exists:cars,id',
        'nopol' => 'required|string|max:20',
        'rental_hours' => 'nullable|numeric',
        'rental_time' => 'required|in:Jam,Hari,Bulan',
        'rental_car' => 'required|numeric|min:0',
        'rental_driver' => 'nullable|numeric|min:0',
        'date_checkin' => 'nullable|date|required_if:rental_time,Hari|required_if:rental_time,Bulan',
        'date_checkout' => 'nullable|date|after_or_equal:date_checkin|required_if:rental_time,Hari|required_if:rental_time,Bulan',
    ]);

    $rentalTime = $validated['rental_time'];
    $rentalCar = $validated['rental_car'];
    $rentalDriver = $validated['rental_driver'] ?? 0;

    // Menghitung total hari
    $totalDays = $rentalTime !== 'Jam'
        ? Carbon::parse($validated['date_checkin'])->diffInDays(Carbon::parse($validated['date_checkout'])) + 1
        : 0;

    // Menghitung total transaksi
    $totalTransaksi = $rentalTime === 'Jam'
        ? $rentalCar + $rentalDriver
        : ($rentalCar + $rentalDriver) * $totalDays;

    // Memperbarui transaksi yang sudah ada
    $transaction->update([
        'nama_penyewa' => $validated['nama_penyewa'],
        'jaminan' => $validated['jaminan'],
        'no_identitas' => $validated['no_identitas'],
        'no_tlpn' => $validated['no_tlpn'],
        'alamat' => $validated['alamat'],
        'cars_id' => $validated['cars_id'],
        'nopol' => $validated['nopol'],
        'rental_hours' => $rentalTime === 'Jam' ? $validated['rental_hours'] : null,
        'rental_time' => $rentalTime,
        'rental_car' => $rentalCar,
        'rental_driver' => $rentalDriver,
        'date_checkin' => $rentalTime !== 'Jam' ? $validated['date_checkin'] : null,
        'date_checkout' => $rentalTime !== 'Jam' ? $validated['date_checkout'] : null,
        'total_date' => $totalDays,
        'total_transaksi' => $totalTransaksi,
    ]);

    return redirect()->route('admin.transactions.index')->with('success', 'Transaction updated successfully.');
}



    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('admin.transactions.index')->with('success', 'Transaction deleted successfully.');
    }
}
