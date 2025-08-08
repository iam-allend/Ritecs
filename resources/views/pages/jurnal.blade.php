@extends('layouts.main')

@section('content')

    <div class="container-fluid feature bg-white py-5">

        <div class="container-fluid py-5 bg-light">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <!-- <h4 class="text-primary">Blog</h4> -->
                <h1 class="display-4 mb-4">News And Updates</h1>
                <!-- <h3 class="display-4 mb-4">Book & Journal</h1> -->
                <p class="mb-0">
                    RITECS menyediakan berbagai layanan penerbitan buku dan jurnal ilmiah, mulai dari penyuntingan naskah, penerjemahan, hingga penerbitan ber-ISBN. Kami berkomitmen untuk mendukung penulis dan akademisi dalam mewujudkan karya mereka.
                </p>
            </div>
        </div>

        
        <!-- Jurnal Start -->
        <div class="container-fluid blog py-3">
            <div class="container py-5 text-center">
                <div class="text-start pb-2 ps-1 ps-md-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h5 class="text-primary">Terbaru</h5>
                    <h2 class="fw-bold mb-4">Paling Populer</h2>
                    <!-- <h3 class="display-4 mb-4">Book & Journal</h1> -->
                    <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic. -->
                    </p>
                </div>
                <div class="container-fuild">
                    <div class="row g-4 justify-content-start text-start">
    
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item rounded">
                                <div class="blog-content rounded p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary me-1"></i></span>Aditya Priadi P, <span class="text-primary"> 3+ </span></div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 1 Dec 2025</div>
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Kombinasi Naive Bayes dan Chi-Square untuk Identifikasi SMS ...</a>

                                    <div class="kata-kunci my-2">
                                        <p class="h6 small mb-0 ">Kata Kunci : </p>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Naïve Bayes</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">TF-IDF</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Chi-Square</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Klasifikasi</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">SMS Penipuan</span>
                                    </div>
                                    <a href="{{ ('detail-jurnal')}}" class="p-0 text-dark small">Detail jurnal<i class="fa fa-arrow-right ms-2 small"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item rounded">
                                <div class="blog-content rounded p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary me-1"></i></span>Riby Imanuel, <span class="text-primary"> 2+ </span></div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 6 Aug 2025</div>
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Deteksi dan Klasifikasi Citra Wajah Menggunakan MTCNN dan ...</a>

                                    <div class="kata-kunci my-2">
                                        <p class="h6 small mb-0 ">Kata Kunci : </p>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Deteksi wajah</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">MTCNN</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">MobileNet</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">pengenalan wajah</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">klasifikasi</span>
                                    </div>
                                    <a href="{{ ('detail-jurnal')}}" class="p-0 text-dark small">Detail jurnal<i class="fa fa-arrow-right ms-2 small"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item rounded">
                                <div class="blog-content rounded p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary me-1"></i></span>Aditya Priadi P, <span class="text-primary"> 3+ </span></div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 1 Dec 2025</div>
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Kombinasi Naive Bayes dan Chi-Square untuk Identifikasi SMS ...</a>

                                    <div class="kata-kunci my-2">
                                        <p class="h6 small mb-0 ">Kata Kunci : </p>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Naïve Bayes</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">TF-IDF</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Chi-Square</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Klasifikasi</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">SMS Penipuan</span>
                                    </div>
                                    <a href="{{ ('detail-jurnal')}}" class="p-0 text-dark small">Detail jurnal<i class="fa fa-arrow-right ms-2 small"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item rounded">
                                <div class="blog-content rounded p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary me-1"></i></span>Riby Imanuel, <span class="text-primary"> 2+ </span></div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 6 Aug 2025</div>
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Deteksi dan Klasifikasi Citra Wajah Menggunakan MTCNN dan ...</a>

                                    <div class="kata-kunci my-2">
                                        <p class="h6 small mb-0 ">Kata Kunci : </p>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Deteksi wajah</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">MTCNN</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">MobileNet</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">pengenalan wajah</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">klasifikasi</span>
                                    </div>
                                    <a href="{{ ('detail-jurnal')}}" class="p-0 text-dark small">Detail jurnal<i class="fa fa-arrow-right ms-2 small"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item rounded">
                                <div class="blog-content rounded p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary me-1"></i></span>Aditya Priadi P, <span class="text-primary"> 3+ </span></div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 1 Dec 2025</div>
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Kombinasi Naive Bayes dan Chi-Square untuk Identifikasi SMS ...</a>

                                    <div class="kata-kunci my-2">
                                        <p class="h6 small mb-0 ">Kata Kunci : </p>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Naïve Bayes</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">TF-IDF</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Chi-Square</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Klasifikasi</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">SMS Penipuan</span>
                                    </div>
                                    <a href="{{ ('detail-jurnal')}}" class="p-0 text-dark small">Detail jurnal<i class="fa fa-arrow-right ms-2 small"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item rounded">
                                <div class="blog-content rounded p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary me-1"></i></span>Riby Imanuel, <span class="text-primary"> 2+ </span></div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 6 Aug 2025</div>
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Deteksi dan Klasifikasi Citra Wajah Menggunakan MTCNN dan ...</a>

                                    <div class="kata-kunci my-2">
                                        <p class="h6 small mb-0 ">Kata Kunci : </p>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">Deteksi wajah</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">MTCNN</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">MobileNet</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">pengenalan wajah</span>
                                        <span class="keywords-badge py-0 small my-1 ms-0 me-1">klasifikasi</span>
                                    </div>
                                    <a href="{{ ('detail-jurnal')}}" class="p-0 text-dark small">Detail jurnal<i class="fa fa-arrow-right ms-2 small"></i></a>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection