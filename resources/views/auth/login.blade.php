@extends('layouts.guest')
@section('title', 'Login')
@section('main')
<div class="d-flex justify-content-center py-4">
    <a href="index.html" class="logo d-flex align-items-center w-auto">
      <img src="{{ asset('./admin/img/logo1.png') }}" alt="">
      <span class="d-none d-lg-block">Kenangan Rentcar</span>
    </a>
  </div><!-- End Logo -->

  <div class="card mb-3">

    <div class="card-body">

      <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
        <p class="text-center small">Masukan Email & password Anda</p>
      </div>

      <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <div class="input-group has-validation">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" required>
            <div class="invalid-feedback">Please enter your email.</div>
            @error('email')
            <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="col-12">
          <label for="yourPassword" class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
          <div class="invalid-feedback">Please enter your password!</div>
          @error('password')
            <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
          <button class="btn btn-outline-warning w-100" type="submit">Login</button>
        </div>
        <div class="col-12">
          <p class="small mb-0">Lupa Password? <a href="{{ route('password.request') }}">Klik disini</a></p>
        </div>
      </form>

    </div>
  </div>
@endsection