@extends('layouts.admin')
@section('title', 'Mobil')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><i class="bi bi-pencil-square"></i> Ubah Data</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item" aria-current="page">Mobil</li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="card card-warning card-outline mb-4">
                <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" name="type" id="type" class="form-control"
                                value="{{ $car->type }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="car_type" class="form-label">Mobil</label>
                            <input type="text" name="car_type" id="car_type" class="form-control"
                                value="{{ $car->car_type }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="transmission_type" class="form-label">Transmisi</label>
                            <select class="form-select" id="transmission_type" name="transmission_type" required>
                                <option value="Manual" {{ $car->transmission_type == 'Manual' ? 'selected' : '' }}>Manual
                                </option>
                                <option value="Automatic" {{ $car->transmission_type == 'Automatic' ? 'selected' : '' }}>
                                    Automatic</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid transmisi.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="seat_count" class="form-label">Seat</label>
                            <input type="number" name="seat_count" id="seat_count" class="form-control"
                                value="{{ $car->seat_count }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Upload</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @if ($car->image)
                                <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image">
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i> Simpan</button>
                        <a href="{{ route('admin.cars.index') }}" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
