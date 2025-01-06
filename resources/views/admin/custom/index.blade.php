@extends('layouts.admin')
@section('title', 'Customize')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><i class="bi bi-palette"></i> Customize</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Custom</li>
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
                <div class="mb-2">
                    @if ($custom->isNotEmpty())
                        <a href="{{ route('admin.custom.edit', $custom->first()->id) }}"
                            class="btn btn-outline-warning float-end">
                            <i class="bi bi-plus-square-fill"></i> Edit
                        </a>
                    @endif
                </div>
                <div class="card-body">
                    @forelse ($custom as $item)
                        <div class="row mb-3">
                            <div class="col-3">
                                <label class="form-label">Lokasi</label>
                                <textarea type="text" class="form-control" readonly>{{ $item->location }}</textarea>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Link URL Instagram</label>
                                <textarea type="text" class="form-control" readonly>{{ $item->link_ig }}</textarea>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Nomor Handphone / WhatsApp First</label>
                                <input type="text" class="form-control" value="{{ $item->no_tlpn_first }}" readonly>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Nomor Handphone / WhatsApp Second</label>
                                <input type="text" class="form-control" value="{{ $item->no_tlpn_second }}" readonly>
                            </div>
                            <div class="col-4">
                                <label for="" class="form-label">Icon</label>
                                @if ($item->logo)
                                    <img src="{{ asset('storage/' . $item->logo) }}" class="form-control" alt="Icon Image">
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label">Background Image</label>
                                @if ($item->image_background)
                                    <img src="{{ asset('storage/' . $item->image_background) }}" alt="Background Image"
                                        class="form-control">
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label">Promo First</label>
                                @if ($item->image_promo_first)
                                    <img src="{{ asset('storage/' . $item->image_promo_first) }}" alt="Promo First Image"
                                        class="form-control">
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label">Promo Second</label>
                                @if ($item->image_promo_second)
                                    <img src="{{ asset('storage/' . $item->image_promo_second) }}" alt="Promo Second Image"
                                        class="form-control">
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label">Profile Image First</label>
                                @if ($item->image_profile_first)
                                    <img src="{{ asset('storage/' . $item->image_profile_first) }}" alt="Promo Second Image"
                                        class="form-control">
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label">Profile Image Second</label>
                                @if ($item->image_profile_second)
                                    <img src="{{ asset('storage/' . $item->image_profile_second) }}" alt="Promo Second Image"
                                        class="form-control">
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label">Promo Text</label>
                                <input type="text" class="form-control" value="{{ $item->text_promo }}" readonly>
                            </div>
                        @empty
                            <p>Data custom tidak tersedia.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
