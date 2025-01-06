@extends('layouts.admin')
@section('title', 'Mobil')
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
                        <a href="{{ route('admin.cars.index') }}" class="breadcrumb-item" aria-current="page">Mobil</a>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="card card-warning card-outline mb-4">
                <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" name="type" id="type" class="form-control" required>
                            <div id="type" class="form-text">
                                Example : Sedan
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="car_type" class="form-label">Mobil</label>
                            <input type="text" name="car_type" id="car_type" class="form-control" required>
                            <div id="car_type" class="form-text">
                                Example : Terios
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="transmission_type" class="form-label">Transmisi</label>
                            <select class="form-select" id="transmission_type" name="transmission_type" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="seat_count" class="form-label">Seat</label>
                            <input type="text" name="seat_count" id="seat_count" class="form-control" required>
                            <div id="seat_count" class="form-text">
                                Example : 5
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="image" name="image">
                            <label class="input-group-text" for="image">Upload</label>
                        </div>
                        <div id="file" class="form-text">
                            Format : JPEG, JPG, PNG. Max: 2 Mb. Width : 440 Height : 262.
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i> Simpan</button>
                        <a href="{{ route('admin.cars.index') }}" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    @endsection
