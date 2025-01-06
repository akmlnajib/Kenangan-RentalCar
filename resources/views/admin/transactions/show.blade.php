@extends('layouts.admin')
@section('title', 'Detail')
@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="card card-warning card-outline mb-4">
            <div class="card-body">
                <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-baseline">
                        <div class="col-xl-9">
                            <p style="color: #7e8d9f; font-size: 20px;">
                                Invoice &gt;&gt; <strong>ID: #{{ ($transaction->invoice) }}</strong>
                            </p>
                        </div>
                    
                        <div class="col-xl-3 d-flex justify-content-end align-items-center">
                            <img src="{{ asset('storage/' . $custom->logo) }}" width="100" alt="Logo">
                        </div>
                    </div>
                    

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8">
                                <ul class="list-unstyled">
                                    <li class="text-muted">
                                        Kepada: <span style="color:#8f8061;">{{ $transaction->nama_penyewa }}</span>
                                    </li>
                                    <li class="text-muted">{{ $transaction->alamat }}</li>
                                    <li class="text-muted">
                                        <i class="fas fa-phone"></i> Phone: {{ $transaction->no_tlpn }}
                                    </li>
                                    <li class="text-muted">No Identitas: {{ $transaction->no_identitas }}</li>
                                </ul>
                            </div>

                            <div class="col-xl-4">
                                <p class="text-muted">Invoice Details</p>
                                <ul class="list-unstyled">
                                    <li class="text-muted">
                                        <i class="fas fa-circle" style="color:#8f8061;"></i>
                                        <span class="fw-bold">ID:</span> #{{ $transaction->invoice }}
                                    </li>
                                    <li class="text-muted">
                                        <i class="fas fa-circle" style="color:#8f8061;"></i>
                                        <span class="fw-bold">Created:</span> {{ $transaction->created_at->format('d M Y') }}
                                    </li>
                                    <li class="text-muted">
                                        <span class="badge bg-warning text-black fw-bold">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row my-2 mx-1 justify-content-center">
                            <div class="col-md-2 mb-4 mb-md-0">
                                <div class="bg-image ripple rounded-5 mb-4 overflow-hidden d-block"
                                    data-ripple-color="light">
                                    <img src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" 
                                        class="w-100" height="100px" alt="Rental Car">
                                </div>
                            </div>

                            <div class="col-md-3 mb-4 mb-md-0">
                                <p class="fw-bold">Informasi Mobil</p>
                                <p><span class="text-muted me-2">Type: </span>
                                    {{ $transaction->car->type }}
                                </p>                                
                                <p><span class="text-muted me-2">Nama:</span>
                                    {{ $transaction->car->car_type }}</p>
                                <p><span class="text-muted me-2">Nomor Polisi:</span>
                                    {{ $transaction->nopol }}</p>
                            </div>
                            <div class="col-md-7 mb-4 mb-md-0">
                                <p class="fw-bold">Informasi Penyewaan</p>
                                <p><span class="text-muted me-2">Rental Duration: </span>
                                    @if ($transaction->rental_time === 'Jam')
                                        {{ $transaction->rental_hours }} Jam
                                    @elseif ($transaction->rental_time === 'Hari')
                                        {{ $transaction->total_date }}
                                    @else
                                        Bulanan
                                    @endif
                                </p>                                
                                <p><span class="text-muted me-2">Check-in Date:</span>
                                    {{ $transaction->date_checkin ?? $transaction->created_at->format('d M Y H:i') }}</p>
                                <p><span class="text-muted me-2">Check-out Date:</span>
                                    {{ $transaction->date_checkout ?? $transaction->created_at->copy()->addHours($transaction->rental_hours)->format('d M Y H:i') }}</p>
                            </div>

                            
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-xl-8">
                                <p>Additional Notes</p>
                                <p><small>Harga belum termasuk biaya denda</small></p>
                            </div>

                            <div class="col-xl-3">
                                <ul class="list-unstyled">
                                    @if ($transaction->rental_time === 'Jam')
                                    <li class="text-muted">
                                        <span>Durasi </span>: {{ $transaction->rental_hours }} Jam
                                    </li>
                                    <li class="text-muted">
                                        <span>Mobil</span>: Rp. {{ number_format($transaction->rental_car, 0, ',', '.') }}
                                    </li>
                                    <li class="text-muted mt-2">
                                        @if ($transaction->rental_driver > 0)
                                        <span>Supir</span>: Rp. {{ number_format($transaction->rental_driver, 0, ',', '.') }}
                                        @else
                                            <span>Supir</span>: -
                                        @endif
                                    </li>
                                    @else
                                    <li class="text-muted">
                                        <span>Durasi </span>: {{ $transaction->total_date }} Hari
                                    </li>
                                    <li class="text-muted">
                                        <span>Mobil</span>: Rp. {{ number_format($transaction->rental_car, 0, ',', '.') }}
                                    </li>
                                    <li class="text-muted mt-2">
                                        @if ($transaction->rental_driver > 0)
                                        <span>Supir</span>: Rp. {{ number_format($transaction->rental_driver, 0, ',', '.') }}
                                        @else
                                            <span>Supir</span>: -
                                        @endif
                                    </li>
                                    @endif
                                </ul>

                                <p>
                                    Total: <strong>Rp. {{ number_format($transaction->total_transaksi, 0, ',', '.') }}</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.transactions.index') }}" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection
