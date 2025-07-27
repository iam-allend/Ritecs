
@extends('layouts.main')

@section('content')

<div class="container-fluid feature bg-light py-5">

    <!-- Buku Start -->
    <div class="container-fluid blog py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <h3 class="display-4 mb-4">Book & Journal</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-start">
                
                <div class="col-lg-6 col-xl-6 col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item h-100">
                        <div class="row g-0">
                            <div class="col-md-4 col-12">
                                <div class="blog-img position-relative h-100">
                                    <img src="assets/img/buku.png" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="">
                                    <div class="blog-categiry py-2 px-4">
                                        <span>Ekonomi & Bisnis</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-12">
                                <div class="blog-content px-3 py-2 h-100 rounded-end bg-light">
                                    <div class="blog-comment d-flex justify-content-between mb-3 flex-wrap small">
                                        <div><span class="fa fa-user text-primary"></span> Arry Maulana Syarif</div>
                                        <div><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                    </div>
                                    <a href="#" class="h4 d-inline-block mb-2">Pengantar Pipeline Animasi Berbasis AI</a>
                                    <p class="mb-2">Adalah buku panduan praktis dan konseptual yang menyajikan gambaran menyeluruh tentang bagaimana teknologi kecerdasan buatan (AI)...</p>
                                    <a href="{{ ('detail-buku') }}" class="nav-item nav-link text-dark p-0">Lihat Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-xl-6 col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item h-100">
                        <div class="row g-0">
                            <div class="col-md-4 col-12">
                                <div class="blog-img position-relative h-100">
                                    <img src="{{ ('assets/img/buku.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="">
                                    <div class="blog-categiry py-2 px-4">
                                        <span>Ekonomi & Bisnis</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-12">
                                <div class="blog-content px-3 py-2 h-100 rounded-end bg-light">
                                    <div class="blog-comment d-flex justify-content-between mb-3 flex-wrap small">
                                        <div><span class="fa fa-user text-primary"></span> Arry Maulana Syarif</div>
                                        <div><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                    </div>
                                    <a href="#" class="h4 d-inline-block mb-2">Pengantar Pipeline Animasi Berbasis AI</a>
                                    <p class="mb-2">Adalah buku panduan praktis dan konseptual yang menyajikan gambaran menyeluruh tentang bagaimana teknologi kecerdasan buatan (AI)...</p>
                                    <a href="{{ ('detail-buku') }}" class="nav-item nav-link text-dark p-0">Lihat Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             


            </div>
        </div>
    </div>
    <!-- Buku End -->

</div>

@endsection