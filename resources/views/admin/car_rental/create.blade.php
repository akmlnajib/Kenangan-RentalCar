@extends('layouts.admin')
@section('title', 'Daftar Harga Penyewaan')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><i class="bi bi-plus-square-fill"></i> Tambah Data</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Home</li>
                        <a href="{{ route('admin.car_rental.index') }}" class="breadcrumb-item" aria-current="page">Daftar Harga</a>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="card card-warning card-outline mb-4">
                <form action="{{ route('admin.car_rental.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="car_id" class="form-label">Mobil</label>
                            <select name="car_id" id="car_id" class="form-select">
                                @foreach ($cars as $car)
                                    <option value="{{ $car->id }}">{{ $car->type }} - {{ $car->car_type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="rental_time" class="form-label">Waktu Sewa</label>
                            <input type="text" name="rental_time" id="rental_time" class="form-control">
                            <div id="rental_time" class="form-text">
                                Example : 1 Jam, 1 Hari
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rental_car_price" class="form-label">Harga Sewa Mobil</label>
                            <input type="number" name="rental_car_price" id="rental_car_price" class="form-control">
                            <div id="rental_car_price" class="form-text">
                                Example : 100000
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rental_driver_price" class="form-label">Harga Sewa Supir</label>
                            <input type="number" name="rental_driver_price" id="rental_driver_price" class="form-control">
                            <div id="rental_car_price" class="form-text">
                                Example : 100000
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i> Simpan</button>
                        <a href="{{ route('admin.car_rental.index') }}" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    @endsection
