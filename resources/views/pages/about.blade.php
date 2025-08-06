
@extends('layouts.main')

@section('content')


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-fluid bg-light about pb-5 mt-5">
            <div class="container pb-5 mt-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            <h4 class="text-primary">Tentang Kami</h4>
                            <h1 class="display-4 mb-4">VISI & MISI</h1>
                            <H3>Visi
                            </H3>
                            <p>Menyediakan layanan terpercaya dan inklusif dalam mendukung dan berkontribusi nyata bagi
                                pengembangan ilmu pengetahuan, budaya baca, dan daya imajinasi bangsa.</p>
                            <H3>Misi
                            </H3>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Menerbitkan karya ilmiah dan kreatif dari berbagai latar belakang.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Mendukung literasi dan budaya baca melalui publikasi ilmiah dan non-ilmiah.</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Menjaga kualitas dan etika dalam proses penerbitan.</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded bg-light">
                                        <img src="assets/img/tim.png" class="img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">10</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Tenaga Ahli</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">5</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Layanan</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">12</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Skilled Agents</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">15</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Team Members</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Feature Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Layanan Kami</h4>
                    <h1 class="display-4 mb-4">Apa yang Kami Tawarkan</h1>
                    <p class="mb-0">Kami menyediakan berbagai layanan penerbitan buku dan jurnal, mulai dari penyuntingan, tata letak, desain grafis, hingga penerbitan ber-ISBN. Tim kami siap membantu Anda mewujudkan karya ilmiah dan kreatif Anda.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item h-100 p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-book-open fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Penerbitan Buku</h4>
                            <p class="mb-4">Kami menyediakan layanan penerbitan buku lengkap, mulai dari penyuntingan, tata letak, desain grafis, hingga penerbitan ber-ISBN
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 {{ ($title ?? '') === 'Petunjuk Penulis' ? 'active' : '' }}" href="{{ route('petunjuk-penulis') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item h-100 p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-newspaper fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Penerbitan Jurnal</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                                pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item h-100 p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Membership</h4>
                            <p class="mb-4">
                                Bergabunglah dengan komunitas kami untuk mendapatkan akses ke berbagai layanan dan sumber daya penerbitan. Dapatkan keuntungan eksklusif sebagai anggota.
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 {{ ($title ?? '') === 'Membership' ? 'active' : '' }}" href="{{ route('petunjuk-penulis') }}">Learn More</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item h-100 p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-th-large fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Tata Letak Halaman</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                                pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="1s">
                        <div class="feature-item h-100 p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-drafting-compass fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Design Grafis Ilustrasi</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                                pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="feature-item h-100 p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-language fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Translate&Proofreading</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                                pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div> -->
                </div>
            
            </div>
        </div>
        <!-- Feature End -->

        <!-- FAQs Start -->
        <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">Some Important FAQ's</h4>
                                <h1 class="display-5 mb-0">Pertanyaan umum tentang layanan dan penerbitan di RITECS.</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: Apa itu RITECS??
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            A: RITECS adalah lembaga penerbitan yang menyediakan layanan penerbitan buku dan jurnal ilmiah. Kami berkomitmen untuk mendukung pengembangan ilmu pengetahuan dan budaya baca di Indonesia.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: Apakah saya bisa menerbitkan buku sendiri di RITECS?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Ya, Anda bisa menerbitkan buku sendiri di RITECS. Kami menyediakan layanan penerbitan yang lengkap, mulai dari penyuntingan hingga penerbitan ber-ISBN.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: Berapa biaya untuk menerbitkan buku di RITECS?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Biaya penerbitan buku di RITECS bervariasi tergantung pada layanan yang Anda pilih. Kami menawarkan paket penerbitan yang fleksibel untuk memenuhi kebutuhan Anda.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="assets/img/carousel-2.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                    <p class="mb-0">Tim RITECS terdiri dari profesional berpengalaman di bidang penerbitan, desain, dan akademik, siap mendukung setiap langkah perjalanan publikasi Anda.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
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
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
@endsection