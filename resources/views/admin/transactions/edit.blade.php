@extends('layouts.admin')
@section('title', 'Transaksi')
@section('content')

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0"><i class="bi bi-pencil-square"></i> Ubah Data</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.transactions.index') }}">Tansaksi</a>
                    </li>
                    <li class="breadcrumb-item active">Ubah Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="app-content-header">
<div class="container-fluid">
    <div class="card card-warning card-outline mb-4">
        <form action="{{ route('admin.transactions.update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="mb-3">
                    <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
                    <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" placeholder="Nama Penyewa" value="{{ old('nama_penyewa', $transaction->nama_penyewa) }}">
                    <div class="form-text">
                        Example : Udin Sutrisno
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jaminan" class="form-label">Jaminan</label>
                    <input type="text" name="jaminan" id="jaminan" class="form-control" placeholder="Jaminan" value="{{ old('jaminan', $transaction->jaminan) }}">
                    <div  class="form-text">
                        Example : KTP, KK
                    </div>
                </div>

                <div class="mb-3">
                    <label for="no_identitas" class="form-label">Nomor Identitas</label>
                    <input type="number" name="no_identitas" id="no_identitas" class="form-control" placeholder="31710320321" value="{{ old('no_identitas', $transaction->no_identitas) }}">
                    <div  class="form-text">
                        Example : 31710320321
                    </div>
                </div>
                <div class="mb-3">
                    <label for="no_tlpn" class="form-label">Nomor Telepon</label>
                    <input type="number" name="no_tlpn" id="no_tlpn" class="form-control" placeholder="1234567890" value="{{ old('no_tlpn', $transaction->no_tlpn) }}">
                    <div  class="form-text">
                        Example : 08963772312
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Jl. Malam"value="{{ old('alamat', $transaction->alamat) }}">
                    <div  class="form-text">
                        Example : Jl. Malam
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cars_id" class="form-label">Mobil</label>
                    <select name="cars_id" id="cars_id" class="form-select">
                        @foreach ($cars as $car)
                            <option value="{{ $car->id }}" {{ $transaction->cars_id == $car->id ? 'selected' : '' }}>
                                {{ $car->car_type }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nopol" class="form-label">Nomor Polisi</label>
                    <input type="text" name="nopol" id="nopol" class="form-control" placeholder="Nomor Polisi" value="{{ old('nopol', $transaction->nopol) }}">
                    <div  class="form-text">
                        Example : B 1234 PST
                    </div>
                </div>

                <div class="mb-3">
                    <label for="rental_time" class="form-label">Penyewaan</label>
                    <select name="rental_time" id="rental_time" class="form-select">
                        <option value="Jam" {{ $transaction->rental_time == 'Jam' ? 'selected' : '' }}>Per Jam</option>
                        <option value="Hari" {{ $transaction->rental_time == 'Hari' ? 'selected' : '' }}>Harian</option>
                        <option value="Bulan" {{ $transaction->rental_time == 'Bulan' ? 'selected' : '' }}>Bulanan</option>
                    </select>
                </div>

                <div class="mb-3" id="date-fields" style="{{ $transaction->rental_time !== 'Jam' ? '' : 'display:none;' }}">
                    <label for="date_checkin" class="form-label">Tanggal Check-in</label>
                    <input type="date" name="date_checkin" id="date_checkin" class="form-control" value="{{ $transaction->date_checkin }}">

                    <label for="date_checkout" class="form-label mt-2">Tanggal Check-out</label>
                    <input type="date" name="date_checkout" id="date_checkout" class="form-control" value="{{ $transaction->date_checkout }}">
                </div>

                <div class="mb-3" id="hours-fields" style="{{ $transaction->rental_time == 'Jam' ? '' : 'display:none;' }}">
                    <label for="rental_hours" class="form-label">Waktu Sewa (Jam)</label>
                    <input type="number" name="rental_hours" id="rental_hours" class="form-control" step="0.01" placeholder="Jumlah Jam" value="{{ old('rental_hours', $transaction->rental_hours) }}">
                    <div  class="form-text">
                        Example : 6
                    </div>
                </div>

                <div class="mb-3">
                    <label for="rental_car" class="form-label">Harga Sewa Mobil</label>
                    <input type="number" name="rental_car" id="rental_car" class="form-control" step="0.01" placeholder="Harga Sewa" value="{{ old('rental_car', $transaction->rental_car) }}">
                    <div  class="form-text">
                        Example : 100000
                    </div>
                </div>

                <div class="mb-3"> 
                    <input type="checkbox" name="with_driver" id="with_driver" class="form-check-input"
                           {{ $transaction->rental_driver > 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="with_driver">
                        Menggunakan Supir?
                    </label>
                
                    <input type="number" name="rental_driver" id="rental_driver"
                           class="form-control mt-2"
                           placeholder="Harga Supir"
                           step="0.01"
                           value="{{ old('rental_driver', $transaction->rental_driver) }}"
                           {{ $transaction->rental_driver > 0 ? '' : 'style=display:none;' }}>
                           <div  class="form-text">
                            Example : 100000
                        </div>
                </div>                               

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-warning">
                    <i class="bi bi-save"></i> Perbarui
                </button>
                <a href="{{ route('admin.transactions.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
</div>

<script>
    document.getElementById('rental_time').addEventListener('change', function() {
        document.getElementById('date-fields').style.display = (this.value === 'Hari' || this.value === 'Bulan') ? '' : 'none';
        document.getElementById('hours-fields').style.display = (this.value === 'Jam') ? '' : 'none';
    });

    document.getElementById('with_driver').addEventListener('change', function() {
    const rentalDriverInput = document.getElementById('rental_driver');
    rentalDriverInput.style.display = this.checked ? 'block' : 'none';
    });

</script>

@endsection
