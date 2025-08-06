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

        <!-- Buku Start -->
        <div class="container-fluid blog pt-5">
            <div class="container text-center">
                <div class="text-start pb-2 ps-1 ps-md-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h5 class="text-primary">Terbaru</h5>
                    <h2 class="fw-bold mb-4">Paling Populer</h2>
                    <!-- <h3 class="display-4 mb-4">Book & Journal</h1> -->
                    <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic. -->
                    </p>
                </div>
                <div class="container-fuild flex-scroller">    
                    <div class="d-flex gap-4">
                        <div class="blog-item card-buku">
                            <div class="blog-img rounded-top">
                                <img src="assets/img/book1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-1 px-4">
                                    <span>Buku</span>
                                </div>
                            </div>
                            <div class="blog-content p-3">
                                <div class="blog-comment d-flex justify-content-between mb-2">
                                    <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                    <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                    
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                <div class="mb-2">
                                    <span class="d-flex align-items-start gap-2">
                                        <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                        <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                    </span>
                                </div>
                                <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item card-buku">
                            <div class="blog-img rounded-top">
                                <img src="assets/img/book1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-1 px-4">
                                    <span>Buku</span>
                                </div>
                            </div>
                            <div class="blog-content p-3">
                                <div class="blog-comment d-flex justify-content-between mb-2">
                                    <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                    <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                    
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                <div class="mb-2">
                                    <span class="d-flex align-items-start gap-2">
                                        <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                        <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                    </span>
                                </div>
                                <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item card-buku">
                            <div class="blog-img rounded-top">
                                <img src="assets/img/book1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-1 px-4">
                                    <span>Buku</span>
                                </div>
                            </div>
                            <div class="blog-content p-3">
                                <div class="blog-comment d-flex justify-content-between mb-2">
                                    <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                    <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                    
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                <div class="mb-2">
                                    <span class="d-flex align-items-start gap-2">
                                        <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                        <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                    </span>
                                </div>
                                <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item card-buku ">
                            <div class="blog-img rounded-top">
                                <img src="assets/img/jurnal.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-1 px-4">
                                    <span>Jurnal</span>
                                </div>
                            </div>
                            <div class="blog-content p-3">
                                <div class="blog-comment d-flex justify-content-between mb-2">
                                    <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                    <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                    
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                <div class="mb-2">
                                    <span class="d-flex align-items-start gap-2">
                                        <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                        <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                    </span>
                                </div>
                                <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item card-buku">
                            <div class="blog-img rounded-top">
                                <img src="assets/img/buku1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-1 px-4">
                                    <span>Buku</span>
                                </div>
                            </div>
                            <div class="blog-content p-3">
                                <div class="blog-comment d-flex justify-content-between mb-2">
                                    <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                    <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                    
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                <div class="mb-2">
                                    <span class="d-flex align-items-start gap-2">
                                        <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                        <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                    </span>
                                </div>
                                <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-item card-buku">
                            <div class="blog-img rounded-top">
                                <img src="assets/img/buku1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-1 px-4">
                                    <span>Buku</span>
                                </div>
                            </div>
                            <div class="blog-content p-3">
                                <div class="blog-comment d-flex justify-content-between mb-2">
                                    <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                    <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                    
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                <div class="mb-2">
                                    <span class="d-flex align-items-start gap-2">
                                        <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                        <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                    </span>
                                </div>
                                <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- Buku Start -->
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
                    <div class="row g-4 justify-content-center text-start">
    
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item">
                                <div class="blog-img rounded-top">
                                    <img src="assets/img/book1.png" class="img-fluid rounded-top w-100" alt="">
                                    <div class="blog-categiry py-1 px-4">
                                        <span>Buku</span>
                                    </div>
                                </div>
                                <div class="blog-content p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                       
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                    <div class="mb-2">
                                        <span class="d-flex align-items-start gap-2">
                                            <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                            <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                        </span>
                                    </div>
                                    <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-item ">
                                <div class="blog-img rounded-top">
                                    <img src="assets/img/jurnal.png" class="img-fluid rounded-top w-100" alt="">
                                    <div class="blog-categiry py-1 px-4">
                                        <span>Jurnal</span>
                                    </div>
                                </div>
                                <div class="blog-content p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                       
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                    <div class="mb-2">
                                        <span class="d-flex align-items-start gap-2">
                                            <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                            <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                        </span>
                                    </div>
                                    <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item">
                                <div class="blog-img rounded-top">
                                    <img src="assets/img/buku1.png" class="img-fluid rounded-top w-100" alt="">
                                    <div class="blog-categiry py-1 px-4">
                                        <span>Buku</span>
                                    </div>
                                </div>
                                <div class="blog-content p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                       
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                    <div class="mb-2">
                                        <span class="d-flex align-items-start gap-2">
                                            <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                            <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                        </span>
                                    </div>
                                    <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item">
                                <div class="blog-img rounded-top">
                                    <img src="assets/img/buku1.png" class="img-fluid rounded-top w-100" alt="">
                                    <div class="blog-categiry py-1 px-4">
                                        <span>Buku</span>
                                    </div>
                                </div>
                                <div class="blog-content p-3">
                                    <div class="blog-comment d-flex justify-content-between mb-2">
                                        <div class="small"><i class="bi bi-person-lines-fill text-primary"></i></span> Martin.C</div>
                                        <div class="small"><i class="bi bi-calendar-range text-primary"></i></span> 30 Dec 2025</div>
                                       
                                    </div>
                                    <a href="#" class="h6 d-inline-block mb-2">Leverage agile frameworks to provide</a>
                                    <div class="mb-2">
                                        <span class="d-flex align-items-start gap-2">
                                            <span class="text-dark my-1 my-md-0 small text-harga text-nowrap">Rp 27.999 (pdf)</span>
                                            <span class="text-dark fw-bold my-1 my-md-0 small text-harga text-nowrap">Rp 91.777 (cetak)</span> 
                                        </span>
                                    </div>
                                    <a href="{{ ('detail-buku')}}" class="p-0">Lihat Buku <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection