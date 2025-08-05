@extends('layouts.profile')

@section('content')
<div class="dashboard">
    <h4 class="mb-4 fw-bold">Dashboard</h4>

    <div class="row g-4">
        <!-- Card Statistik -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h6 class="card-title text-muted">Total Publikasi</h6>
                    <h3 class="fw-bold text-primary">12</h3>
                    <small class="text-muted">Buku & Jurnal terdaftar</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h6 class="card-title text-muted">Member Aktif</h6>
                    <h3 class="fw-bold text-success">58</h3>
                    <small class="text-muted">Member terverifikasi</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h6 class="card-title text-muted">Transaksi</h6>
                    <h3 class="fw-bold text-warning">24</h3>
                    <small class="text-muted">Transaksi bulan ini</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik / Info tambahan -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h6 class="card-title fw-bold mb-3">Aktivitas Terbaru</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">📘 Buku "Pengantar AI" diterbitkan</li>
                        <li class="list-group-item px-0">👤 Member baru mendaftar</li>
                        <li class="list-group-item px-0">🛒 Transaksi pembayaran berhasil</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
