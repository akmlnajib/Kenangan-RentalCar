@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row mb-2"> <!--begin::Col-->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box shadow-lg"> <span class="info-box-icon text-bg-secondary shadow-sm"> <i class="bi bi-cash-coin"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Keseluruhan</span> <span
                                class="info-box-number">Rp. {{ number_format($totalTransactions, 0, ',', '.') }}</span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box shadow"> <span class="info-box-icon text-bg-info shadow-sm"> <i class="bi bi-graph-up"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Tahun ini</span> <span
                                class="info-box-number">Rp. {{ number_format($totalRevenueThisYear, 0, ',', '.') }}</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box shadow"> <span class="info-box-icon text-bg-success shadow-sm"> <i
                                class="bi bi-bar-chart-line"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Bulan ini</span> <span
                                class="info-box-number">Rp. {{ number_format($totalRevenueThisMonth, 0, ',', '.') }}</span>
                        </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col --> <!-- fix for small devices only --> <!-- <div class="clearfix hidden-md-up"></div> -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box shadow"> <span class="info-box-icon text-bg-warning shadow-sm"> <i
                                class="bi bi-people-fill"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Client Transaksi</span> <span
                                class="info-box-number">{{ $totalTransactionsCount }}</span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
            </div> <!--end::Row--> <!--begin::Row-->
        </div>
    </div>
@endsection
