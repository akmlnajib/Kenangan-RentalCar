@extends('layouts.guest')
@section('title', 'Reset Password')
@section('main')
<div class="d-flex justify-content-center py-4">
    <a href="index.html" class="logo d-flex align-items-center w-auto">
      <img src="{{ asset('./admin/img/logo1.png') }}" alt="">
      <span class="d-none d-lg-block">Kenangan Rentcar</span>
    </a>
</div>
<div class="card mb-3">
    <!-- Session Status -->
    @if(session('status'))
    <div class="alert alert-success mb-4">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-body">
        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
            <p class="text-center small">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        </div>
        <form method="POST" action="{{ route('password.email') }}" class="row g-3 needs-validation" novalidate>
            @csrf
        <div class="col-12">
          <label for="email" class="form-label">{{ __('Email') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-outline-warning w-100">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </div>
</div>
@endsection
