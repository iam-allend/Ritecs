@extends('layouts.main')

@section('content')

<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Petunjuk Penulis</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Bantuan</a></li>
                    <li class="breadcrumb-item"><a href="#">Petunjuk Penulis</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
         


        <div class="container-fluid py-5">
            <div class="container py-5">

                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    
                    <h1 class="display-4 mb-4">Menerbitkan Buku bersama Ritecs</h1>
                    <p class="mb-0">Kami menerima berbagai jenis naskah untuk diterbitkan menjadi buku berkualitas dengan standar nasional dan internasional.
                    </p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-4 text-center">Jenis buku yang kami terbitkan:</h4>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-book fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Ajar</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-scroll fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Monograf</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-atlas fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Referensi</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-atom fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Populer Ilmiah</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-flask fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Modul / Praktikum</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-comments fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Konferensi / Prosiding</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-globe-asia fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Non-Fiksi Umum</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <i class="fa fa-feather-alt fa-2x text-primary me-3"></i>
                            <h5 class="m-0">Buku Fiksi</h5>
                        </div>
                    </div>
                </div>
                <hr class="my-5">

                <div class="text-center mx-auto pt-5 pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Model Publikasi</h4>
                    <h1 class="display-4 mb-4">Skema Penerbitan Buku</h1>
                    <p class="mb-0">Pilih skema penerbitan yang paling sesuai dengan tujuan dan kebutuhan distribusi karya Anda.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-primary text-white d-flex align-items-center">
                                <i class="fa fa-unlock-alt fa-2x me-3"></i>
                                <h5 class="m-0">Akses Terbuka (eISBN)</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Model publikasi yang memungkinkan siapa pun untuk mengakses, membaca, dan menggunakan karya ilmiah secara <strong>gratis</strong> melalui internet. Pengetahuan dapat disebarluaskan lebih luas dan cepat, mendukung kolaborasi, transparansi, serta kemajuan ilmu pengetahuan.</p>
                                <footer class="blockquote-footer mt-2">Distribusi luas untuk jangkauan maksimal.</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-dark text-white d-flex align-items-center" style="background-color: var(--bs-darkblue) !important;">
                                <i class="fa fa-lock fa-2x me-3"></i>
                                <h5 class="m-0">Akses Tertutup (eISBN)</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Model publikasi di mana karya ilmiah hanya dapat diakses oleh pembaca yang <strong>membayar</strong> atau memiliki <strong>langganan</strong>. Akses dibatasi oleh *paywall*, sehingga penyebaran ilmu pengetahuan lebih terkontrol. Strategi distribusi dan penjualan akan didiskusikan untuk mendapatkan kesepakatan.</p>
                                <footer class="blockquote-footer mt-2">Model komersial dengan potensi monetisasi.</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card h-100 shadow-sm">
                             <div class="card-header bg-secondary text-white d-flex align-items-center">
                                <i class="fa fa-print fa-2x me-3"></i>
                                <h5 class="m-0">Buku Cetak (ISBN)</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Skema ini berlaku untuk karya yang diwujudkan dalam bentuk fisik dan hanya dapat diakses oleh pembaca yang <strong>membeli buku</strong>. Penulis menanggung biaya cetak untuk 100-500 eksemplar. Strategi distribusi dan penjualan akan didiskusikan bersama untuk mencapai kesepakatan.</p>
                                <footer class="blockquote-footer mt-2">Wujud fisik untuk koleksi dan penjualan langsung.</footer>
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
        </div>

        <!-- petunjuk -->
    <div class="container-fluid feature bg-light py-5">

        <div class="container py-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Petunjuk Penulis</h4>
                <h1 class="display-4 mb-4">Langkah & Tahap</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row">
                <div class="col col-12 col-md-5 p-0">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="{{ ('assets\img\petunjuk.webp') }}" class="img-fluid img-petunjuk" width="" alt="">
                    </div>
                </div>
                <div class="col col-12 col-md-7">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap pengiriman</h5>
                                <p class="p-0 m-0">Kirim naskah berbahasa Indonesia atau Inggris dalam format .doc melalui e-mail. Anda tidak perlu melakukan pengeditan tata letak halaman, termasuk membuat kover buku. </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Peninjauan</h5>
                                <p class="p-0 m-0">
                                    Tim editor kami akan meninjau materi naskah untuk menentukan kesesuaian dan kelayakan dalam waktu maksimal 7 hari terhitung sejak tanggal e-mail penerimaan naskah.                                 
                                </p>
                                <p class="p-0 m-0 pt-0">
                                    Naskah yang dinilai kurang sesuai dan kurang layak akan kami kembalikan dengan saran perbaikan agar penulis dapat mengirim ulang naskah setelah melakukan perbaikan
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Penyuntingan</h5>
                                <p class="p-0 m-0">
                                    Naskah yang dinilai sesuai dan layak akan masuk ke tahap penyuntingan (tata bahasa, tata letak, dan ilustrasi). Untuk  naskah berbahasa Inggris, kami juga akan melakukan proofreading . Jika naskah dalam bahasa Indonesia akan diterbitkan dalam bahasa Inggris, kami akan melakukan terjemahan dan proofreading. Tahap pengeditan naskah berdurasi maksimal 14 hari kerja.                              
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Pendaftaran ISBN</h5>
                                <p class="p-0 m-0">
                                    Setelah penyuntingan dan berkas lengkap, kami akan mendaftarkan nomor ISBN untuk penerbitannya. Durasi pada tahap ini mengikuti proses dari Perpusnas, dan dapat dipantau bersama melalui: <a href="https://isbn.perpusnas.go.id/landing_page/pelacakan">Halaman ini</a>
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Distribusi</h5>
                                <p class="p-0 m-0">
                                    Setelah nomor ISBN diterbitkan, buku akan didistribusikan berdasarkan skema penerbitan yang disepakati
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
 
@endsection