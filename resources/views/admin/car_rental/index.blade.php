@extends('layouts.admin')
@section('title', 'Daftar Harga Penyewaan')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><i class=" bi bi-list-columns-reverse"></i> Daftar Harga Penyewaan</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Daftar Harga</li>
                    </ol>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif(session('danger'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-x-circle-fill"></i>
                    {{ session('danger') }}
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
                        <a href="{{ route('admin.car_rental.create') }}" class="btn btn-outline-warning float-end">
                            <i class="bi bi-plus-square-fill"></i> Tambah Data
                        </a>
                    </div>
                    <table id="example" class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Mobil</th>
                                <th>Waktu Sewa</th>
                                <th>Harga Sewa Mobil</th>
                                <th>Harga Sewa Supir</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carRentals as $rental)
                                <tr class="align-middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rental->car->car_type }}</td>
                                    <td>{{ $rental->rental_time }}</td>
                                    <td>Rp. {{ number_format($rental->rental_car_price, 0, ',', '.') }}</td>
                                    <td>Rp. {{ number_format($rental->rental_driver_price, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('admin.car_rental.edit', $rental->id) }}"
                                            class="btn btn-outline-info">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bi bi-info-circle-fill"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $rental->id }}">
                                            <i class="bi bi-trash3"></i>
                                        </button>

                                        <div class="modal fade" id="deleteModal{{ $rental->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $rental->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $rental->id }}">
                                                            Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data ini ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('admin.car_rental.destroy', $rental->id) }}"
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