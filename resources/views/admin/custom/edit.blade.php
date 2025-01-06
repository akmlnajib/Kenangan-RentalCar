@extends('layouts.admin')
@section('title', 'Customize')
@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0"><i class="bi bi-car-front"></i> Edit Data Custom</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-custom active"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-custom active" aria-current="page">Custom</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="card card-warning card-outline mb-4">
            <div class="card-body">
                <form action="{{ route('admin.custom.update', $custom->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-3">
                            <label class="form-label" for="location">Lokasi</label>
                            <textarea type="text" class="form-control" name="location" required>{{ $custom->location }}</textarea>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="link_ig">Link URL Instagram</label>
                            <textarea type="text" class="form-control" name="link_ig" required>{{ $custom->link_ig }}</textarea>
                        </div>
                    
                        <div class="col-3">
                            <label class="form-label" for="no_tlpn_first">No Telephone / WhatsApp First</label>
                            <input type="text" class="form-control" name="no_tlpn_first" value="{{ $custom->no_tlpn_first }}" required>
                        </div>
                    
                        <div class="col-3">
                            <label class="form-label" for="no_tlpn_second">No Telephone / WhatsApp Second</label>
                            <input type="text" class="form-control" name="no_tlpn_second" value="{{ $custom->no_tlpn_second }}" required>
                        </div>
                        <div class="col-4 mb-2">
                            <label for="logo" class="form-label">Logo</label>
                            @if ($custom->logo)
                                <img src="{{ asset('storage/' . $custom->logo) }}" alt="Icon Image" class="form-control">
                            @endif
                            <input type="file" class="form-control" name="logo" accept="image/*">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="image_background">Background Image</label>
                            @if ($custom->image_background)
                                <img src="{{ asset('storage/' . $custom->image_background) }}" alt="Background Image" class="form-control">
                            @endif
                            <input type="file" class="form-control" name="image_background" accept="image/*">
                        </div>
                    
                        <div class="col-4">
                            <label class="form-label" for="image_promo_first">Promo First</label>
                            @if ($custom->image_promo_first)
                                <img src="{{ asset('storage/' . $custom->image_promo_first) }}" alt="Promo First Image" class="form-control">
                            @endif
                            <input type="file" class="form-control" name="image_promo_first" accept="image/*">
                        </div>
                    
                        <div class="col-4">
                            <label class="form-label" for="image_promo_second">Promo Second</label>
                            @if ($custom->image_promo_second)
                                <img src="{{ asset('storage/' . $custom->image_promo_second) }}" alt="Promo Second Image" class="form-control">
                            @endif
                            <input type="file" class="form-control" name="image_promo_second" accept="image/*">
                        </div>

                        <div class="col-4">
                            <label class="form-label" for="image_profile_first">Profile First</label>
                            @if ($custom->image_profile_first)
                                <img src="{{ asset('storage/' . $custom->image_profile_first) }}" alt="Profile First Image" class="form-control">
                            @endif
                            <input type="file" class="form-control" name="image_profile_first" accept="image/*">
                        </div>
                    
                        <div class="col-4">
                            <label class="form-label" for="image_profile_second">Profile Second</label>
                            @if ($custom->image_profile_second)
                                <img src="{{ asset('storage/' . $custom->image_profile_second) }}" alt="Profile Second Image" class="form-control">
                            @endif
                            <input type="file" class="form-control" name="image_profile_second" accept="image/*">
                        </div>
                    
                        <div class="col-4">
                            <label class="form-label" for="text_promo">Promo Text</label>
                            <input type="text" class="form-control" name="text_promo" value="{{ $custom->text_promo }}" required>
                        </div>
                    
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
