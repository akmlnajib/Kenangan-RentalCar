@extends('layouts.admin')
@section('title', 'Transaksi')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><i class="bi bi-bank"></i> Transaksi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Transaksi</li>
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
                        <a href="{{ route('admin.transactions.create') }}" class="btn btn-outline-warning float-end">
                            <i class="bi bi-plus-square-fill"></i> Tambah Data
                        </a>
                    </div>
                    <table id="example" class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Penyewa</th>
                                <th>Jaminan</th>
                                <th>Type Mobil</th>
                                <th>Nomor Polisi</th>
                                <th class="text-center">Tanggal Penyewaan</th>
                                <th>Durasi Penyewaan</th>
                                <th>Total</th>
                                <th>Opsi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $transaction->nama_penyewa }}</td>
                                    <td>{{ $transaction->jaminan }}</td>
                                    <td>{{ $transaction->car->type }} - {{ $transaction->car->car_type }}</td>
                                    <td>{{ $transaction->nopol }}</td>
                                    <td class="text-center">{{ $transaction->date_checkin ?? $transaction->created_at->format('d M Y H:i') }} s/d {{ $transaction->date_checkout ?? $transaction->created_at->copy()->addHours($transaction->rental_hours)->format('d M Y H:i') }}</td>
                                    <td>
                                        @if ($transaction->rental_time === 'Jam')
                                        {{ $transaction->rental_hours }} Jam
                                        @else
                                        {{ $transaction->total_date }} Hari
                                        @endif
                                    </td>
                                    <td>Rp. {{ number_format($transaction->total_transaksi, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('admin.transactions.edit', $transaction) }}"
                                            class="btn btn-outline-info">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ route('admin.transactions.show', $transaction) }}"
                                            class="btn btn-outline-primary">
                                            <i class="bi bi-info-circle-fill"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $transaction->id }}">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                        <div class="modal fade" id="deleteModal{{ $transaction->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $transaction->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="deleteModalLabel{{ $transaction->id }}">
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
                                                        <form
                                                            action="{{ route('admin.transactions.destroy', $transaction) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
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
