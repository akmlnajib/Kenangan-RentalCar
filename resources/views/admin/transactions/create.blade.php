@extends('layouts.admin')
@section('title', 'Transaksi')
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
                        <a href="{{ route('admin.transactions.index') }}">Transaksi</a>
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
            <form action="{{ route('admin.transactions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
                        <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" placeholder="Udin Sutrisno">
                        <div  class="form-text">
                            Example : Udin Sutrisno
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jaminan" class="form-label">Jaminan</label>
                        <input type="text" name="jaminan" id="jaminan" class="form-control" placeholder="KTP, KK, Akte Kelahiran">
                        <div  class="form-text">
                            Example : KTP, KK
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="no_identitas" class="form-label">Nomor Identitas</label>
                        <input type="number" name="no_identitas" id="no_identitas" class="form-control" placeholder="317103002031">
                        <div  class="form-text">
                            Example : 317103002031
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="no_tlpn" class="form-label">Nomor Telepon</label>
                        <input type="number" name="no_tlpn" id="no_tlpn" class="form-control" placeholder="08974231928">
                        <div  class="form-text">
                            Example : 08974231928
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Jl. Siang">
                        <div id="alamat" class="form-text">
                            Example : Jl. Siang
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cars_id" class="form-label">Mobil</label>
                        <select name="cars_id" id="cars_id" class="form-select">
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}">{{ $car->car_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nopol" class="form-label">Nomor Polisi</label>
                        <input type="text" name="nopol" id="nopol" class="form-control" placeholder="B 1234 PST">
                        <div id="nopol" class="form-text">
                            Example : B 1234 PST
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="rental_time" class="form-label">Penyewaan</label>
                        <select name="rental_time" id="rental_time" class="form-select">
                            <option value="Pilihan">Pilih</option>
                            <option value="Jam">Perjam</option>
                            <option value="Hari">Harian</option>
                            <option value="Bulan">Bulanan</option>
                        </select>
                    </div>
                    <div class="mb-3" id="date-fields" style="display: none;">
                        <label for="date_checkin" class="form-label">Tanggal Checkin</label>
                        <input type="date" name="date_checkin" id="date_checkin" class="form-control">
                        <label for="date_checkout" class="form-label">Tanggal Checkout</label>
                        <input type="date" name="date_checkout" id="date_checkout" class="form-control">
                    </div>
                    <div class="mb-3" id="hours-fields">
                        <label for="rental_hours" class="form-label">Waktu Sewa</label>
                        <input type="number" name="rental_hours" id="rental_hours" class="form-control" step="0.01">
                        <div  class="form-text">
                            Example : 6
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="rental_car" class="form-label">Harga Sewa Mobil</label>
                        <input type="number" name="rental_car" id="rental_car" class="form-control" step="0.01">
                        <div  class="form-text">
                            Example : 100000
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label">
                            Menggunakan Supir?
                            <input type="checkbox" name="with_driver" id="with_driver" class="form-check-input border-warning border-2">
                        </label>
                        <input type="number" name="rental_driver" id="rental_driver" class="form-control" step="0.01" style="display: none;">
                        <div  class="form-text">
                            Example : 100000
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i> Simpan</button>
                    <a href="{{ route('admin.transactions.index') }}" class="btn btn-outline-secondary"><i class="bi bi-caret-left-fill"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('rental_time').addEventListener('change', function () {
        document.getElementById('date-fields').style.display = (this.value === 'Hari' || this.value === 'Bulan') ? 'block' : 'none';
    });

    document.getElementById('rental_time').addEventListener('change', function () {
        document.getElementById('hours-fields').style.display = (this.value === 'Jam' ) ? 'block' : 'none';
    });
    
    document.getElementById('with_driver').addEventListener('change', function () {
        document.getElementById('rental_driver').style.display = this.checked ? 'block' : 'none';
    });
</script>
@endsection
