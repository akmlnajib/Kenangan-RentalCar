@extends('layouts.admin')
@section('title', 'Mobil')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><i class="bi bi-car-front"></i> Data Mobil</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mobil</li>
                    </ol>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="card card-warning card-outline mb-4">
                <div class="card-body">
                    <div class="mb-2">
                        <a href="{{ route('admin.cars.create') }}" class="btn btn-outline-warning float-end">
                            <i class="bi bi-plus-square-fill"></i> Tambah Data
                        </a>
                    </div>
                    <table id="example" class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Type</th>
                                <th>Mobil</th>
                                <th>Transmisi</th>
                                <th>Kursi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr class="align-middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($car->image)
                                            <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image"
                                                width="50">
                                        @endif
                                    </td>
                                    <td>{{ $car->type }}</td>
                                    <td>{{ $car->car_type }}</td>
                                    <td>{{ $car->transmission_type }}</td>
                                    <td>{{ $car->seat_count }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-outline-info">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <!-- Tombol Info -->
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bi bi-info-circle-fill"></i>
                                        </a>
                                        <!-- Tombol Hapus dengan Modal -->
                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $car->id }}">
                                            <i class="bi bi-trash3"></i>
                                        </button>

                                        <!-- Modal Konfirmasi Hapus -->
                                        <div class="modal fade" id="deleteModal{{ $car->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $car->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $car->id }}">
                                                            Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data mobil dengan tipe
                                                        <strong>{{ $car->type }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('admin.cars.destroy', $car->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
