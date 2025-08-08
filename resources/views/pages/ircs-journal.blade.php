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

    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=369,fit=crop/mp8J7x55XouwzNXQ/logo-ircs-jpg-dWxOgbGV0MH6aBMa.jpg"
                    width="100" alt="IRCS Logo" class="mb-4">
                <h1 class="display-5 mb-3">Integrative Research in Computer Science (IRCS)</h1>
                <p class="lead text-muted">
                    IRCS adalah jurnal akses terbuka (*open access*) yang ditinjau sejawat (*peer-reviewed*) yang memuat
                    seluruh aspek ilmu komputer, baik teoretis maupun terapan, dan diterbitkan empat kali dalam setahun
                    secara daring oleh RITECS.
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Navigasi Cepat</h5>
                            <div class="sidebar-nav">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tujuan"><i class="fas fa-archive me-2"></i>Tujuan & Ruang
                                            Lingkup</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#aim-scope"><i
                                                class="fas fa-bullseye me-2"></i>Aim-Scope</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#editorial-board"><i
                                                class="fas fa-users me-2"></i>Editorial-Board</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reviewer-board"><i
                                                class="fas fa-user-check me-2"></i>Reviewer-Board</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#archive">
                                            <i class="fas fa-folder me-2"></i>Archive
                                        </a>


                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#authorGuidelines"><i
                                                class="fas fa-envelope me-2"></i>Author-Guidelines</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#template-fee"><i
                                                class="fas fa-file-alt me-2"></i>Template</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="ircs-section" id="tujuan">
                        <h3 class="mb-3">Tujuan & Ruang Lingkup</h3>
                        <p>IRCS bertujuan untuk menjadi platform terdepan bagi para peneliti, akademisi, dan praktisi untuk
                            berbagi pengetahuan dan inovasi terbaru di bidang ilmu komputer. Kami mendorong pengiriman
                            naskah yang mencakup, namun tidak terbatas pada, topik-topik berikut:</p>
                        <ul class="topic-list mt-4">
                            <li>Kecerdasan Buatan & Pembelajaran Mesin</li>
                            <li>Keamanan Siber & Jaringan</li>
                            <li>Ilmu Data & Analitik</li>
                            <li>Rekayasa Perangkat Lunak</li>
                            <li>Visi Komputer & Pengolahan Citra</li>
                            <li>Komputasi Awan & Terdistribusi</li>
                            <li>Interaksi Manusia & Komputer</li>
                            <li>Bioinformatika</li>
                        </ul>
                    </div>
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
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div id="aim-scope" class="ircs-section p-2 p-md-4 wow fadeInUp" data-wow-delay="0.2s">
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

                        <h5 class="fw-bold mt-4">Editorial Board Members:</h5>
                        <p class="ms-3 mb-3">Dr. Abdul Karim <br><em class="text-muted">(Department of Artificial
                                Intelligence Convergence, Hallym University, Chuncheon 24252, Republic of Korea)</em></p>
                        <p class="ms-3 mb-3">Dr. Tenia Wahyuningrum, S.Kom., M.T. <br><em class="text-muted">(Telkom
                                University, Kampus Purwokerto, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Linda Nur Afifa, S.T., M.T. <br><em class="text-muted">(Universitas Darma
                                Persada, Jakarta, Indonesia)</em></p>
                    </div>


                    <hr class="my-5">

                    <div id="reviewer-board" class="ircs-section p-3 p-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-4 display-6">Reviewer Board</h2>

                        <p class="ms-3 mb-3">Dr. Fikri Budiman, M.Kom. <br><em class="text-muted">(Universitas Dian
                                Nuswantoro, Semarang, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Ednawati Rainarli, M. Si. <br><em class="text-muted">(Universitas Komputer
                                Indonesia, Bandung, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Sutikno, S.T., M.Cs. <br><em class="text-muted">(Universitas Diponegoro,
                                Semarang, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Agung Hadhiatma, M.T. <br><em class="text-muted">(Universitas Sanata Darma,
                                Yogyakarta, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Binti Solihah, ST. M. Kom. <br><em class="text-muted">(Universitas
                                Trisakti, Jakarta, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Widyastuti Andriyani, S.Kom., M. Kom. <br><em
                                class="text-muted">(Universitas Teknologi Digital Indonesia, Yogyakarta, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Ir. Didit Suprihanto, S.T., M.Kom. <br><em class="text-muted">(Universitas
                                Mulawarman, Samarinda, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Eko Hadiyono Riyadi, MTI. <br><em class="text-muted">(Badan Pengawas Tenaga
                                Nuklir, Jakarta, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Donny Avianto, S.T., M.T. <br><em class="text-muted">(Universitas Teknologi
                                Yogyakarta)</em></p>
                        <p class="ms-3 mb-3">Dr. Ahmad Zainul Fanani, S.Si., M.Kom. <br><em class="text-muted">(Universitas
                                Dian Nuswantoro, Semarang, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Dr. Heribertus Himawan, M.Kom. <br><em class="text-muted">(Universitas Dian
                                Nuswantoro, Semarang, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Mohamad Fajarianditya Nugroho, M. Kom. <br><em class="text-muted">(Universitas
                                Abadi Karya Indonesia, Semarang, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Edi Sugiarto, M.Kom. <br><em class="text-muted">(Universitas Dian Nuswantoro,
                                Semarang, Indonesia)</em></p>
                        <p class="ms-3 mb-3">Budi Widjajanto, M.Kom. <br><em class="text-muted">(Universitas Dian
                                Nuswantoro, Semarang, Indonesia)</em></p>
                    </div>
                    <div id="current-volume" class="ircs-section p-3 p-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-4 display-6" id="archive">Current Volume</h2>
                        <h5 class="fw-bold">Vol. 1, No. 1 (Agustus, 2025)</h5>
                        <p class="ms-3 mb-3">
                            <a href="{{ route('detail-jurnal') }}"><strong>Kombinasi Naive Bayes dan Chi-Square untuk
                                    Identifikasi SMS Penipuan | 1-22</strong></a>
                            <br>
                            <em class="text-muted">Aditya Priadi Pradana, Arry Maulana Syarif, Ika Novita Dewi, Candra
                                Irawan</em>
                        </p>
                        <p class="ms-3 mb-3">
                            <a href=""><strong>Deteksi dan Klasifikasi Citra Wajah Menggunakan MTCNN dan MobileNet |
                                    23-39</strong></a>
                            <br>
                            <em class="text-muted">Riby Imanuel, Romy Nur Widianto Dafalah, Riko Christianto Putra Murdoko,
                                Fikri Budiman, Muslih Muslih</em>
                        </p>
                    </div>
                    <hr class="my-5">

                </div>

                <div class="col-xl-4" id="authorGuidelines">
                    <div class="position-sticky" style="top: 1.5rem;">
                        <div class="p-4 rounded border bg-light mb-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="mb-1">Author Guidelines</h4>
                            <p>Submit manuskrip dalam format .docx ke:</p>
                            <a href="#" class="btn btn-dark btn-login-me fw-normal rounded-pill w-100 mb-2">
                                <i class="fas fa-envelope me-2"></i> submission.ritecs@gmail.com
                            </a>
                            <small class="d-block text-center">Subject email: <span class="fw-bold">Manuscript
                                    Submission</span></small>
                        </div>

                        <div class="p-4 rounded text-center border mb-4 wow fadeInUp" data-wow-delay="0.4s"
                            id="template-fee">
                            <h4 class="mb-1 text-center text-primary">Template & Fee</h4>
                            <p class="text-center">Anda dapat mengirimkan artikel dalam format bebas, atau menggunakan
                                template kami.</p>
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