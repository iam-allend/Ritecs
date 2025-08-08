@extends('layouts.main')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.2s">Petunjuk Penulis</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Bantuan</a></li>
                <li class="breadcrumb-item"><a href="#">Petunjuk Penulis</a></li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Petunjuk Penulis Start -->
    <!-- <div class="container-fluid py-5" style="background-color: #f8f9fa;">
            <div class="container py-5">

                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Layanan Kami</h4>
                    <h1 class="display-4 mb-4">Menerbitkan Buku bersama Ritecs</h1>
                    <p class="mb-0">Kami menerima berbagai jenis naskah untuk diterbitkan menjadi buku berkualitas dengan
                        standar nasional dan internasional.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-book fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Ajar</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-scroll fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Monograf</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-atlas fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Referensi</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-atom fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Populer Ilmiah</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-flask fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Modul / Praktikum</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-comments fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Konferensi / Prosiding</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-globe-asia fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Non-Fiksi Umum</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center rounded p-4 jenis-buku-item">
                            <i class="fa fa-feather-alt fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Fiksi</h5>
                        </div>
                    </div>
                </div>
                <hr class="my-5">

                <div class="text-center mx-auto pt-5 pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Model Publikasi</h4>
                    <h1 class="display-4 mb-4">Skema Penerbitan Buku</h1>
                    <p class="mb-0">Pilih skema penerbitan yang paling sesuai dengan tujuan dan kebutuhan distribusi karya Anda.
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="accordion skema-accordion" id="skemaAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-unlock-alt fa-2x me-3"></i> Akses Terbuka (eISBN)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#skemaAccordion">
                                    <div class="accordion-body">
                                        <p>Model publikasi yang memungkinkan siapa pun untuk mengakses, membaca, dan menggunakan
                                            karya ilmiah secara <strong>gratis</strong> melalui internet. Pengetahuan dapat
                                            disebarluaskan lebih luas dan cepat, mendukung kolaborasi, transparansi, serta
                                            kemajuan ilmu pengetahuan.</p>
                                        <footer class="blockquote-footer mt-2">Distribusi luas untuk jangkauan maksimal.
                                        </footer>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-lock fa-2x me-3"></i> Akses Tertutup (eISBN)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#skemaAccordion">
                                    <div class="accordion-body">
                                        <p>Model publikasi di mana karya ilmiah hanya dapat diakses oleh pembaca yang
                                            <strong>membayar</strong> atau memiliki <strong>langganan</strong>. Akses dibatasi
                                            oleh <em>paywall</em>, sehingga penyebaran ilmu pengetahuan lebih terkontrol.
                                            Strategi distribusi dan penjualan akan didiskusikan untuk mendapatkan kesepakatan.
                                        </p>
                                        <footer class="blockquote-footer mt-2">Model komersial dengan potensi monetisasi.
                                        </footer>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-print fa-2x me-3"></i> Buku Cetak (ISBN)
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#skemaAccordion">
                                    <div class="accordion-body">
                                        <p>Skema ini berlaku untuk karya yang diwujudkan dalam bentuk fisik dan hanya dapat
                                            diakses oleh pembaca yang <strong>membeli buku</strong>. Penulis menanggung biaya
                                            cetak untuk 100-500 eksemplar. Strategi distribusi dan penjualan akan didiskusikan
                                            bersama untuk mencapai kesepakatan.</p>
                                        <footer class="blockquote-footer mt-2">Wujud fisik untuk koleksi dan penjualan langsung.
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- petunjuk end -->
    <!-- petunjuk -->
    <div class="container-fluid feature bg-light py-5">

        <div class="container-fluid py-5" id="petunjuk-penulis">
            <div class="container" >

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h1 class="display-6 mb-3">Menerbitkan Buku Bersama Ritecs</h1>
                    <p>Kami menerima beragam jenis naskah untuk diterbitkan menjadi
                        buku berkualitas dengan standar nasional dan internasional.</p>
                </div>

                <div class="row g-4 justify-content-center">

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h6 class="book-title">Buku Ajar</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-scroll"></i>
                                </div>
                                <h6 class="book-title">Monograf</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-atlas"></i>
                                </div>
                                <h6 class="book-title">Buku Referensi</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-atom"></i>
                                </div>
                                <h6 class="book-title">Buku Populer Ilmiah</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <h6 class="book-title">Buku Modul / Praktikum</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h6 class="book-title">Buku Konferensi / Prosiding</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-day="0.4s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <h6 class="book-title">Buku Non-Fiksi Umum</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#" class="text-decoration-none">
                            <div class="book-type-card">
                                <div class="icon-container">
                                    <i class="fas fa-feather-alt"></i>
                                </div>
                                <h6 class="book-title">Buku Fiksi</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

       <div class="container-fluid bg-white py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Model Publikasi</h4>
            <h1 class="display-6 mb-4">Skema Penerbitan Buku</h1>
            <p>Pilih skema penerbitan yang paling sesuai dengan tujuan dan kebutuhan distribusi karya Anda.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="scheme-card">
                    <div class="icon-container">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-0">Akses Terbuka (eISBN)</h5>
                    <p class="mb-2">
                        Model publikasi gratis yang memungkinkan karya Anda diakses oleh siapa saja di seluruh dunia, mempercepat penyebaran ilmu pengetahuan dan meningkatkan jumlah sitasi.
                    </p>
                    <div class="text-primary fw-medium">
                        <i class="fas fa-check-circle me-1"></i> Jangkauan Maksimal
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="scheme-card">
                    <div class="icon-container">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-0">Akses Tertutup (eISBN)</h5>
                    <p class="mb-2">
                        Model publikasi komersial di mana pembaca perlu membayar atau berlangganan. Skema ini memberikan kontrol penuh atas distribusi dan potensi monetisasi karya Anda.
                    </p>
                    <div class="text-primary fw-medium">
                        <i class="fas fa-check-circle me-1"></i> Potensi Monetisasi
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="scheme-card">
                    <div class="icon-container">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-0">Buku Cetak (ISBN)</h5>
                    <p class="mb-2">
                        Skema tradisional untuk karya yang diwujudkan dalam bentuk fisik. Penulis menanggung biaya cetak untuk mendapatkan hasil eksklusif yang dapat dijual dan didistribusikan.
                    </p>
                    <div class="text-primary fw-medium">
                        <i class="fas fa-check-circle me-1"></i> Wujud Fisik Eksklusif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

        <div class="container py-5">

            <div class="text-center mx-auto pb-md-5 pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Langkah & Tahap</h4>
                <h1 class="display-4 mb-4">Prosedur Penerbitan Buku</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row">
                <div class="col col-12 col-xl-5 p-0 d-none d-xl-block wow fadeInUp" data-wow-delay="0.2s">
                    <div
                        class="d-flex justify-content-center align-items-center h-100 p-3 p-md-5 ps-3 ps-md-0 pb-3 pb-md-0">
                        <img src="{{ ('assets\img\petunjuk2.webp') }}" class="img-fluid img-petunjuk" alt="">
                    </div>
                </div>
                <div class="col col-12 col-xl-7 ">
                    <div class="timeline">
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap pengiriman</h5>
                                <p class="p-0 m-0">Kirim naskah berbahasa Indonesia atau Inggris dalam format .doc melalui
                                    e-mail. Anda tidak perlu melakukan pengeditan tata letak halaman, termasuk membuat kover
                                    buku. </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.4s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Peninjauan</h5>
                                <p class="p-0 m-0">
                                    Tim editor kami akan meninjau materi naskah untuk menentukan kesesuaian dan kelayakan
                                    dalam waktu maksimal 7 hari terhitung sejak tanggal e-mail penerimaan naskah.
                                </p>
                                <p class="p-0 m-0 pt-0">
                                    Naskah yang dinilai kurang sesuai dan kurang layak akan kami kembalikan dengan saran
                                    perbaikan agar penulis dapat mengirim ulang naskah setelah melakukan perbaikan
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.6s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Penyuntingan</h5>
                                <p class="p-0 m-0">
                                    Naskah yang dinilai sesuai dan layak akan masuk ke tahap penyuntingan (tata bahasa, tata
                                    letak, dan ilustrasi). Untuk naskah berbahasa Inggris, kami juga akan melakukan
                                    proofreading . Jika naskah dalam bahasa Indonesia akan diterbitkan dalam bahasa Inggris,
                                    kami akan melakukan terjemahan dan proofreading. Tahap pengeditan naskah berdurasi
                                    maksimal 14 hari kerja.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.8s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Pendaftaran ISBN</h5>
                                <p class="p-0 m-0">
                                    Setelah penyuntingan dan berkas lengkap, kami akan mendaftarkan nomor ISBN untuk
                                    penerbitannya. Durasi pada tahap ini mengikuti proses dari Perpusnas, dan dapat dipantau
                                    bersama melalui: <a href="https://isbn.perpusnas.go.id/landing_page/pelacakan">Halaman
                                        ini</a>
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="1s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Distribusi</h5>
                                <p class="p-0 m-0">
                                    Setelah nomor ISBN diterbitkan, buku akan didistribusikan berdasarkan skema penerbitan
                                    yang disepakati
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection