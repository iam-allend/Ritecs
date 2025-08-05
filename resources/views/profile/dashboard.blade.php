@extends('layouts.profile')

@section('content')
<div class="d-flex justify-content-between w-100 mb-2">
    <span class="text-dark mb-4 d-none d-md-flex">
        <img src="{{ asset('assets/img/team-1.jpg') }}" class="bg-dark rounded object-fit-cover img-profile-profile me-3" alt="">
        <div class="nama-profile">
            <h5 class="mb-0 fw-bold">Hallo, Anur Mustakim </h5>
            <span class="normal-text text-member bg-primary small">Membership</span>
        </div>
    </span>
    <span class="d-none d-md-flex flex-nowrap text-nowrap small">
        <a href="" class="normal-text">Profile/</a>
        <a href="#" class="text-dark">Dashboard</a>
    </span>
</div>
<div class="dashboard mb-5">    
    <div class="row g-3">
        <!-- Card Statistik -->
        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body">
                    <h6 class="card-title text-muted">Total Publikasi</h6>
                    <h3 class="fw-bold text-dark">12</h3>
                    <small class="text-muted">Buku & Jurnal terdaftar</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded border border-primary">
                <div class="card-body">
                    <h6 class="card-title text-muted">Member Aktif</h6>
                    <h3 class="fw-bold text-primary">58 <span class="h4 text-primary">Hari</span></h3>
                    <small class="text-muted">Waktu langganan tersisa</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body">
                    <h6 class="card-title text-muted">Unduhan</h6>
                    <h3 class="fw-bold normal-text">24</h3>
                    <small class="text-muted">Unduhan Jurnal/E-Book</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik / Info tambahan -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card border-0 rounded">
                <div class="card-body">
                    <h5 class="card-title mb-2">Riwayat Unduhan</h5>
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item px-0 normal-text d-flex justify-content-between">
                            <span><i class="bi bi-journal-text"></i> Buku "Sebuah Seni Untuk Bersikap" oleh Anur Mustakim</span>
                            <span><a href="#" class="text-primary"><i class="bi bi-arrow-bar-right"></i></i></a></span>
                        </li>
                        <li class="list-group-item px-0 normal-text d-flex justify-content-between">
                            <span><i class="bi bi-journal-text"></i> Buku "Filosifi Sophie" E-Book Novel</span> 
                            <span><a href="#" class="text-primary"><i class="bi bi-arrow-bar-right"></i></i></a></span>
                        </li>
                        <li class="list-group-item px-0 normal-text d-flex justify-content-between">
                            <span><i class="bi bi-journal-bookmark-fill"></i> Jurnal "Pengantar AI" oleh Arry Maulana</span>
                            <span><a href="#" class="text-primary"><i class="bi bi-arrow-bar-right"></i></i></a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
