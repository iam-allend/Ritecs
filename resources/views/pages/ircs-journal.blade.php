@extends('layouts.main')

@section('content')

<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ ucfirst($title ?? 'Ritecs') }}</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Bantuan</a></li>
                <li class="breadcrumb-item"><a href="#">IRCS Journal</a></li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
    
    <div class="container-fluid bg-white py-5">
        <div class="container pt-2">
            <div class="text-center m-auto pb-2 wow fadeInDown" data-wow-delay="0.2s"style="max-width: 900px;">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=369,fit=crop/mp8J7x55XouwzNXQ/logo-ircs-jpg-dWxOgbGV0MH6aBMa.jpg" width="100" alt="">
                <h2 class="display-6 my-4">Integrative Research in Computer Science</h2>
                <p>
                    Integrative Research in Computer Science (IRCS) adalah jurnal akses terbuka (open access) yang ditinjau sejawat (peer-reviewed) yang memuat seluruh aspek ilmu komputer, baik teoretis maupun terapan, dan diterbitkan empat kali dalam setahun secara daring oleh RITECS
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col col-6 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="0.4s">
                    <a href="#archive" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Archive</a>
                </div>
                <div class="col col-6 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="0.6s">
                    <a href="#aim&scope" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Aim & Scope</a>
                </div>
                <div class="col col-6 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="0.8s">
                    <a href="#editorialBoard" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Editoral Board</a>
                </div>
                <div class="col col-6 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="1s">
                    <a href="#reviewerBoard" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Reviewer Board</a>
                </div>
                <div class="col col-6 col-md-5 col-lg-4 col-xl-2 p-2 m-0 wow fadeInDown" data-wow-delay="1.2s">
                    <a href="#authorGuidelines" class="btn btn-outline-dark rounded-pill px-4 small w-100 text-nowrap">Author Guidelines</a>
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
                            Gratis bagi pembaca, dengan biaya pemrosesan artikel (article processing charges/APC) yang dibayarkan oleh penulis atau institusinya.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Publikasi Cepat</h4>
                        <p class="mb-0">
                            Naskah ditinjau sejawat dan keputusan pertama diberikan kepada penulis maksimal 14 hari setelah pengajuan; dari penerimaan hingga publikasi dilakukan maksimal dalam 30 hari.
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
                            Diskon APC sebesar 10% diberikan untuk setiap artikel yang mencantumkan minimal satu penulis yang merupakan anggota RITECS.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="1s">
                    <div class="feature-item h-100 p-4">
                        <h4 class="h5 mb-1">Penghargaan bagi Reviewer</h4>
                        <p class="mb-0">
                            Reviewer yang memberikan laporan tinjauan sejawat secara tepat waktu dan menyeluruh akan menerima voucher yang memberikan diskon APC 20% untuk publikasi berikutnya di semua jurnal RITECS, sebagai bentuk apresiasi atas kontribusinya.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid bg-whtie py-5" id="aim&scope">
        <div class="container text-center m-auto py-5" style="max-width: 900px;">
            <h2 class="display-6 wow fadeInUp" data-wow-delay="0.2s">Aim & Scope</h2>
            <p class="p-3 py-3 m-0 rounded wow fadeInUp" data-wow-delay="0.2s">
                Integrative Research in Computer Science (IRCS) menerbitkan karya asli yang telah ditinjau sejawat, yang mencerminkan sifat integratif dari ilmu komputer di berbagai disiplin ilmu. Jurnal ini mendorong pengiriman artikel yang menekankan pada dasar-dasar teoretis, implementasi praktis, kolaborasi interdisipliner, dan aplikasi inovatif. Topik-topik yang menjadi fokus meliputi, namun tidak terbatas pada:
            </p>
            <p class="p-2 py-3 m-0 wow fadeInUp" data-wow-delay="0.4s">
                Artificial Intelligence, Machine Learning and Deep Learning; Data Science and Big Data Analytics; Software Engineering and System Architecture; Human-Computer Interaction (HCI); Computational Intelligence and Cognitive Computing; Cybersecurity and Cryptography; Computer Vision and Image Processing; Internet of Things (IoT) and Embedded Systems; Cloud Computing and Distributed Systems; Natural Language Processing; Robotics and Autonomous Systems; Bioinformatics and Computational Biology; Digital Media, Arts, and Cultural Computing; Educational Technologies and Learning Systems; Computational Social Science and E-Government; Theoretical Computer Science and Algorithms; Ethical, Legal, and Societal Implications of Computing.
            </p>
            <p class="p-2 py-3 m-0 wow fadeInUp" data-wow-delay="0.6s">
                IRCS juga menerima artikel interdisipliner yang mengintegrasikan ilmu komputer dengan bidang seperti pendidikan, kesehatan, ekonomi, humaniora, seni, ilmu lingkungan, dan ranah-ranah baru lainnya.
            </p>
        </div>
    </div>

    <div class="container-fluid feature bg-light py-5" id="editorialBoard">

        <!-- Team Start -->
        <div class="container team pb-5">
            <div class="text-center m-auto w-100 pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Tim Kami</h4>
                <h1 class="display-4 mb-4">Editorial Board</h1>
                <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p> -->
            </div>
            <div class="row g-4 justify-content-center m-auto w-100 w-100">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-white team-title p-4">
                            <p class="mb-1 fw-bolder"><i class="bi bi-gear"></i> Editor-in-Chief</p>
                            <h5 class="mb-0 pb-0 text-white fw-bold">Dr. Arry Maulana Syarif</h5>
                            <p class="mb-0">Universitas Dian Nuswantoro</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-2.jpg" class="img-fluid rounded-top rou w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-white team-title p-4">
                            <p class="mb-1 fw-bolder"><i class="bi bi-gear"></i> Managing Editor</p>
                            <h5 class="mb-0 pb-0 text-white fw-bold">Dr. Fikri Budiman</h5>
                            <p class="mb-0">Universitas Dian Nuswantoro</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-3.jpg" class="img-fluid rounded-top rou w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-white team-title p-4">
                            <p class="mb-1 fw-bolder"><i class="bi bi-gear"></i> Associate Editor</p>
                            <h5 class="mb-0 pb-0 text-white fw-bold">Edi Sugiarto, M.Kom</h5>
                            <p class="mb-0">Universitas Dian Nuswantoro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

    </div>

@endsection