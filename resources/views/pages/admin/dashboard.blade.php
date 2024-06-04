@extends('layouts.admin')

@section('content')
    <h2 class="text-dark fw-semibold mb-5">Selamat Datang Kembali, {{ Auth::user()->name }} 👋</h2>
    <div class="row g-3 mb-5">
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-box fs-1 text-pink"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Produk</p>
                    <h3 class="mb-0 text-dark fw-semibold">20 Produk</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bxs-user fs-1 text-pink"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Customer</p>
                    <h3 class="mb-0 text-dark fw-semibold">10 Customer</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-calendar fs-1 text-pink"></i>
                    <p class="mb-1 mt-2 text-secondary">Reservasi Terjadwal</p>
                    <h3 class="mb-0 text-dark fw-semibold">10 Rerservasi</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-money-withdraw fs-1 text-pink"></i>
                    <p class="mb-1 mt-2 text-secondary">Total Pendapatan</p>
                    <h3 class="mb-0 text-dark fw-semibold">Rp. 10.000.000</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
