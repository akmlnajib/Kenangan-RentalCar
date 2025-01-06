@extends('layouts.admin')

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
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.users.index') }}">Users</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="app-content-header">
    <div class="container-fluid">
        
        <div class="card card-warning card-outline mb-4">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i> Simpan</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
