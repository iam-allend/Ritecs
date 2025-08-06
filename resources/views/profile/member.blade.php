@extends('layouts.profile')

@section('content')
<div class="d-flex justify-content-between w-100 mb-2">
    <span class="text-dark mb-4 d-flex">
        <img src="{{ asset('assets/img/team-1.jpg') }}" class="bg-dark rounded object-fit-cover img-profile-profile me-3" alt="">
        <div class="nama-profile">
            <h5 class="mb-0 fw-bold">Hallo, Anur Mustakim </h5>
            <span class="normal-text text-member bg-primary small">Membership</span>
        </div>
    </span>
    <span class="d-none d-md-flex flex-nowrap text-nowrap small">
        <a href="" class="normal-text">Profile/</a>
        <a href="#" class="text-dark">Memberhsip</a>
    </span>
</div>
<div class="memberhsip mb-2 w-100 p-2">    
    <div class="row justify-content-start">

        <div class="col col-12 col-lg-4 p-3 pt-lg-1">
            <div class="pricing-card profile-popular popular pb-3 border-dark border-1">
                <div class="card-header text-center">
                    <h4 class="card-title">Membership</h4>
                </div>
                <!-- <div class="card-body text-center">
                    <div class="price-tag">
                        <sup>Rp</sup>
                        <span class="display-4">75K</span>
                        <span class="text-muted">/bulan</span>
                    </div>
                    <p class="mt-2">Pilihan terbaik untuk akses penuh dan benefit maksimal.</p>
                </div> -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="text-dark fas fa-check-circle me-2"></i>Akses buku/jurnal artikel</li>
                    <li class="list-group-item"><i class="text-dark fas fa-check-circle me-2"></i>Akses layanan publikasi Buku</li>
                    <li class="list-group-item"><i class="text-dark fas fa-check-circle me-2"></i>Akses layanan publikasi Jurnal</li>
                    <li class="list-group-item "><i class="text-dark fas fa-check-circle me-2"></i>Potongan harga member</li>
                    <li class="list-group-item "><i class="text-dark fas fa-check-circle me-2"></i>Bimbingan mentor profesional</li>
                    <li class="list-group-item "><i class="text-dark fas fa-check-circle me-2"></i>Grup diskusi ekslusif</li>
                </ul>
                <!-- <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary rounded-pill w-100">Pilih Paket</a>
                </div> -->
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="ps-3 h-100 pt-4 pt-lg-0">
                <h5 class="fw-bold mb-3"><i class="fas fa-book-open me-2"></i>Layanan Publikasi</h5>

                <div class="mb-4">
                    <h6 class="fw-semibold text-dark"><i class="fas fa-upload me-1"></i> Upload Buku</h6>
                    <p class="mb-2 text-muted">
                        Layanan ini memungkinkan Anda mempublikasikan buku ke platform kami secara profesional. Dapatkan ISBN resmi, desain cover, layout isi, dan distribusi digital.
                    </p>
                    <a href="" class="btn btn-sm btn-outline-dark rounded-pill fw-normal px-3">
                        <i class="fas fa-upload me-1"></i> Upload Buku Sekarang
                    </a>
                </div>

                <div class="mb-4">
                    <h6 class="fw-semibold text-primary"><i class="fas fa-file-alt me-1"></i> Upload Jurnal</h6>
                    <p class="mb-2 text-muted">
                        Submit jurnal Anda untuk dipublikasikan ke portal akademik nasional/internasional. Tim kami akan membantu proses peer-review dan penerbitan.
                    </p>
                    <a href="" class="btn btn-sm btn-outline-primary rounded-pill fw-normal px-3">
                        <i class="fas fa-upload me-1"></i> Upload Jurnal Sekarang
                    </a>
                </div>

                <!-- <div class="alert alert-warning small mt-4">
                    <i class="fas fa-info-circle me-2"></i>
                    Semua layanan publikasi akan melalui proses moderasi dan verifikasi oleh tim kami.
                </div> -->
            </div>
        </div>

    </div>
</div>

@endsection
