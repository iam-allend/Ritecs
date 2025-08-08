@extends('layouts.main')

@section('content')


<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Program Keanggotaan</h1>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('service') }}">Layanan</a></li>
            <li class="breadcrumb-item active text-primary">Membership</li>
        </ol>    
    </div>
</div>


<div class="container-fluid bg-light py-5" id="membership">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="display-5 mb-3">Pilih Paket yang Tepat Untuk Anda</h2>
            <p class="lead text-muted">Kami menawarkan berbagai level keanggotaan dengan benefit eksklusif untuk mendukung kebutuhan Anda. Bergabunglah dengan komunitas kami sekarang.</p>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="pricing-card h-100">
                    <div class="card-header text-center">
                        <h4 class="card-title fw-normal">Basic</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="price-tag">
                            <sup>Rp</sup>
                            <span class="display-4">0</span>
                            <span class="text-muted">/bulan</span>
                        </div>
                        <p class="mt-2">Untuk memulai dan mencoba fitur dasar kami.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-check-circle me-2"></i>Akses buku/jurnal gratis</li>
                        <li class="list-group-item text-muted"><i class="fas fa-times-circle me-2"></i>Akses layanan publikasi Buku</li>
                        <li class="list-group-item text-muted"><i class="fas fa-times-circle me-2"></i>Akses layanan publikasi Jurnal</li>
                        <li class="list-group-item text-muted "><i class="fas fa-times-circle me-2"></i>Potongan harga member</li>
                        <li class="list-group-item text-muted "><i class="fas fa-times-circle me-2"></i>Bimbingan mentor profesional</li>
                        <li class="list-group-item text-muted "><i class="fas fa-times-circle me-2"></i>Grup diskusi ekslusif</li>

                    </ul>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary rounded-pill w-100">Pilih Paket</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="pricing-card popular h-100">
                    <div class="card-header text-center">
                        <h4 class="card-title">Membership</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="price-tag">
                            <sup>Rp</sup>
                            <span class="display-4">75K</span>
                            <span class="text-muted">/bulan</span>
                        </div>
                        <p class="mt-2">Pilihan terbaik untuk akses penuh dan benefit maksimal.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-check-circle me-2"></i>Akses buku/jurnal gratis</li>
                        <li class="list-group-item"><i class="fas fa-check-circle me-2"></i>Akses layanan publikasi Buku</li>
                        <li class="list-group-item"><i class="fas fa-check-circle me-2"></i>Akses layanan publikasi Jurnal</li>
                        <li class="list-group-item "><i class="fas fa-check-circle me-2"></i>Potongan harga member</li>
                        <li class="list-group-item "><i class="fas fa-check-circle me-2"></i>Bimbingan mentor profesional</li>
                        <li class="list-group-item "><i class="fas fa-check-circle me-2"></i>Grup diskusi ekslusif</li>
                    </ul>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary rounded-pill w-100">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="display-5 mb-3">Keuntungan Menjadi Anggota</h2>
            <p class="lead text-muted">Dapatkan akses ke sumber daya berkualitas yang akan meningkatkan pengetahuan dan keahlian Anda secara signifikan.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-book-open fa-2x"></i>
                    </div>
                    <h5 class="mb-2">Materi eksklusif</h5>
                    <p class="text-muted">Akses ratusan artikel premium, studi kasus, dan hasil riset mendalam yang tidak tersedia untuk umum.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-video fa-2x"></i>
                    </div>
                    <h5 class="mb-2">Bimbingan Secara Daring</h5>
                    <p class="text-muted">Pelajari konsep sulit dengan mudah melalui live video tutorial langkah-demi-langkah dari para ahli.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-download fa-2x"></i>
                    </div>
                    <h5 class="mb-2">Download Materi</h5>
                    <p class="text-muted">Unduh e-book, template, dan kode sumber untuk mempercepat proyek dan pembelajaran Anda.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h5 class="mb-2">Diskusi Privat</h5>
                    <p class="text-muted">Bergabung dengan forum diskusi privat untuk bertanya, berbagi ide, dan berjejaring dengan sesama anggota.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-headset fa-2x"></i>
                    </div>
                    <h5 class="mb-2">Dukungan Prioritas</h5>
                    <p class="text-muted">Dapatkan jawaban atas pertanyaan Anda lebih cepat melalui saluran dukungan khusus untuk anggota premium.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate fa-2x"></i>
                    </div>
                    <h5 class="mb-2">Sertifikat Digital</h5>
                    <p class="text-muted">Dapatkan sertifikat digital setelah menyelesaikan rangkaian materi atau kursus tertentu di platform kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 5. FAQ Section --}}
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="display-5 mb-3">Pertanyaan Umum</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion skema-accordion wow fadeInUp" data-wow-delay="0.3s" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                Bagaimana cara melakukan pembayaran?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami menerima pembayaran melalui transfer bank BCA , BRI , BNI & dll.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                Bisakah saya membatalkan langganan kapan saja?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tentu saja. Anda dapat membatalkan paket langganan Anda kapan pun melalui halaman profil. Anda akan tetap memiliki akses hingga akhir periode tagihan Anda saat ini.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                Apakah ada refund jika saya tidak puas?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami menawarkan jaminan uang kembali dalam 7 hari pertama untuk pelanggan paket Premium baru. Jika Anda merasa tidak puas, silakan hubungi tim dukungan kami.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="container py-5">
        <div class="text-center bg-primary rounded-3 p-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="text-white display-5 mb-3">Siap Bergabung?</h2>
            <p class="text-white-50 mb-4">Tingkatkan keahlian Anda ke level berikutnya. Daftar sekarang dan nikmati semua benefit eksklusif yang kami tawarkan.</p>
            <a href="" class="btn btn-dark btn-login-me rounded-pill px-5 py-3">Daftar Sekarang</a>
        </div>
    </div>
</div>

@endsection