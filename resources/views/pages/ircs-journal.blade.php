@extends('layouts.main')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ ucfirst($title ?? 'Ritecs') }}
            </h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Bantuan</a></li>
                <li class="breadcrumb-item"><a href="#">IRCS Journal</a></li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid bg-white py-5">
        <div class="container pt-2">
            <div class="text-center m-auto pb-2 wow fadeInDown" data-wow-delay="0.2s" style="max-width: 900px;">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=369,fit=crop/mp8J7x55XouwzNXQ/logo-ircs-jpg-dWxOgbGV0MH6aBMa.jpg"
                    width="100" alt="">
                <h2 class="display-6 my-4">Integrative Research in Computer Science</h2>
                <p>
                    Integrative Research in Computer Science (IRCS) adalah jurnal akses terbuka (open access) yang ditinjau
                    sejawat (peer-reviewed) yang memuat seluruh aspek ilmu komputer, baik teoretis maupun terapan, dan
                    diterbitkan empat kali dalam setahun secara daring oleh RITECS
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col col-12 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="0.4s">
                    <a href="#archive" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Archive</a>
                </div>
                <div class="col col-12 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="0.6s">
                    <a href="#aim&scope" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Aim &
                        Scope</a>
                </div>
                <div class="col col-12 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="0.8s">
                    <a href="#editorialBoard"
                        class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Editoral Board</a>
                </div>
                <div class="col col-12 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="1s">
                    <a href="#reviewerBoard" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Reviewer
                        Board</a>
                </div>
                <div class="col col-12 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="1.2s">
                    <a href="#authorGuidelines"
                        class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Author Guidelines</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid feature bg-light py-5">

        <div class="container pb-5">

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Akses Terbuka</h4>
                        <p class="mb-0">
                            Gratis bagi pembaca, dengan biaya pemrosesan artikel (article processing charges/APC) yang
                            dibayarkan oleh penulis atau institusinya.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Publikasi Cepat</h4>
                        <p class="mb-0">
                            Naskah ditinjau sejawat dan keputusan pertama diberikan kepada penulis maksimal 14 hari setelah
                            pengajuan; dari penerimaan hingga publikasi dilakukan maksimal dalam 30 hari.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Bilingual</h4>
                        <p class="mb-0">Naskah yang dipublikasikan dapat ditulis dalam bahasa Inggris atau bahasa Indonesia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Diskon bagi anggota RITECS</h4>
                        <p class="mb-0">
                            Diskon APC sebesar 10% diberikan untuk setiap artikel yang mencantumkan minimal satu penulis
                            yang merupakan anggota RITECS.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="1s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Penghargaan bagi Reviewer</h4>
                        <p class="mb-0">
                            Reviewer yang memberikan laporan tinjauan sejawat secara tepat waktu dan menyeluruh akan
                            menerima voucher yang memberikan diskon APC 20% untuk publikasi berikutnya di semua jurnal
                            RITECS, sebagai bentuk apresiasi atas kontribusinya.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid py-5" id="aim-scope">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">

                    <div  class="ircs-section p-2 p-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-4 display-6">Aim & Scope</h2>
                        <p>Integrative Research in Computer Science (IRCS) menerbitkan karya asli yang telah ditinjau
                            sejawat, yang mencerminkan sifat integratif dari ilmu komputer di berbagai disiplin ilmu. Jurnal
                            ini mendorong pengiriman artikel yang menekankan pada dasar-dasar teoretis, implementasi
                            praktis, kolaborasi interdisipliner, dan aplikasi inovatif.</p>
                        <h5 class="mt-4 mb-3">Topik yang menjadi fokus meliputi:</h5>
                        <ul class="topic-list">
                            <li>Artificial Intelligence, ML & DL</li>
                            <li>Data Science & Big Data Analytics</li>
                            <li>Software Engineering & System Architecture</li>
                            <li>Human-Computer Interaction (HCI)</li>
                            <li>Computational Intelligence</li>
                            <li>Cybersecurity & Cryptography</li>
                            <li>Computer Vision & Image Processing</li>
                            <li>Internet of Things (IoT)</li>
                            <li>Cloud & Distributed Systems</li>
                            <li>Natural Language Processing</li>
                            <li>Robotics & Autonomous Systems</li>
                            <li>Bioinformatics & Computational Biology</li>
                            <li>Digital Media, Arts & Cultural Computing</li>
                            <li>Educational Technologies</li>
                            <li>Computational Social Science</li>
                            <li>Theoretical Computer Science</li>
                            <li>Ethical & Legal Implications of Computing</li>
                        </ul>
                        <p class="mt-4">IRCS juga menerima artikel interdisipliner yang mengintegrasikan ilmu komputer
                            dengan bidang seperti pendidikan, kesehatan, ekonomi, humaniora, seni, ilmu lingkungan, dan
                            ranah-ranah baru lainnya.</p>
                    </div>

                    <hr class="my-5">

                    <div id="editorial-board" class="ircs-section p-3 p-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-4 display-6">Editorial Board</h2>
                        <h5 class="fw-bold">Editor-in-Chief:</h5>
                        <p class="ms-3 mb-3">Dr. Arry Maulana Syarif <br><em class="text-muted">(Universitas Dian
                                Nuswantoro)</em></p>

                        <h5 class="fw-bold">Managing Editor:</h5>
                        <p class="ms-3 mb-3">Dr. Fikri Budiman <br><em class="text-muted">(Universitas Dian Nuswantoro)</em>
                        </p>

                        <h5 class="fw-bold">Associate Editor:</h5>
                        <p class="ms-3 mb-3">Edi Sugiarto, M.Kom. <br><em class="text-muted">(Universitas Dian
                                Nuswantoro)</em></p>
                    </div>

                    <hr class="my-5">

                    <div id="reviewer-board" class="ircs-section p-3 p-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-4 display-6">Reviewer Board</h2>
                        <p class="ms-3 mb-3">Dr. Ahmad Zainul Fanani <br><em class="text-muted">(Universitas Dian
                                Nuswantoro)</em></p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="position-sticky" style="top: 1.5rem;">
                        <div class="p-4 rounded border bg-light mb-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="mb-1">Author Guidelines</h4>
                            <p>Submit manuskrip dalam format .docx ke:</p>
                            <a href="#" class="btn btn-dark btn-login-me fw-normal rounded-pill w-100 mb-2">
                                <i class="fas fa-envelope me-2"></i> submission.ritecs@gmail.com
                            </a>
                            <small class="d-block text-center">Subject email: <span class="fw-bold">Manuscript Submission</span></small>
                        </div>

                        <div class="p-4 rounded text-center border mb-4 wow fadeInUp" data-wow-delay="0.4s">
                            <h4 class="mb-1 text-center text-primary">Template & Fee</h4>
                            <p class="text-center">Anda dapat mengirimkan artikel dalam format bebas, atau menggunakan template kami.</p>
                            <a href="#" class="btn btn-outline-primary fw-normal rounded-pill w-100 mb-3">
                                <i class="fas fa-download me-2"></i> Unduh IRCS Template.docx
                            </a>
                            <hr>
                            <div class="d-flex align-items-center w-100 m-auto">
                                <div class="w-100 m-auto text-center">
                                    <p class="fw-bold m-0">Biaya Publikasi:</p>
                                    Rp 500.000,- (dibayar setelah diterima).
                                </div>
                            </div>
                        </div>

                        <div class="p-3 rounded border wow fadeInUp" data-wow-delay="0.5s">
                            <h5 class="mb-2 ps-2">Navigasi</h5>
                            <nav class="nav flex-column sidebar-nav">
                                <a class="nav-link my-2 py-0" href="#aim-scope">Aim & Scope</a>
                                <a class="nav-link my-2 py-0" href="#editorial-board">Editorial Board</a>
                                <a class="nav-link my-2 py-0" href="#reviewer-board">Reviewer Board</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection