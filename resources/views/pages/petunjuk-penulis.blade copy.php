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
         

    <div class="container-fluid feature bg-light py-5">

        <div class="container-fluid py-5">
            <div class="container pb-5">
                <div class="text-center m-auto pb-2 wow fadeInDown" data-wow-delay="0.2s" style="max-width: 900px;">
                    <!-- <h4 class="text-primary">Menerbitkan Buku</h4> -->
                    <h1 class="display-6">Menerbitkan Buku Bersama Ritecs</h1>
                    <p class="btn text-white bg-dark rounded-pill px-4 py-2 small text-nowrap fw-bold">Jenis buku yang kami terbitkan</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="0.3s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Ajar</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="0.4s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Monograf</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="0.5s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Referensi</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="0.7s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Populer Ilmiah</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="0.8s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Modul / Praktikum</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="0.9s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Konferensi / Prosiding</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="1s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Non-Fiksi Umum</a>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-4 col-xxl-3 p-2 m-0 wow fadeInDown" data-wow-delay="1.1s">
                        <a href="#" class="btn btn-outline-dark fw-light rounded-pill px-4 small w-100 text-nowrap">Buku Fiksi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-white py-5">
            
            <div class="text-center mx-auto pb-2 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Catatan Penting</h4>
                <h1 class="display-4 mb-4">Skema Penerbitan Buku</h1>
                <hr>
                </p>
            </div>

            <div class="container px-md-5 px-1 text-center" style="max-width: 1000px;">
                <div class="item-skema pb-3 pt-0 wow fadeInUp" data-wow-delay="0.3s">
                    <h5 class="m-0 p-0 my-2">Buku Elektronik ber-eISBN dengan Akses Terbuka</h5>
                    <p class="p-0 m-0">
                        Akses terbuka (open access) adalah model publikasi yang memungkinkan siapa pun untuk mengakses, membaca, dan menggunakan karya ilmiah secara gratis melalui internet, tanpa perlu membayar atau berlangganan. Dalam sistem ini, pengetahuan dapat disebarluaskan lebih luas dan lebih cepat, mendukung kolaborasi, transparansi, serta kemajuan ilmu pengetahuan. Oleh karenanya, kami akan mendukung penulis dalam melakukan distribusi untuk dapat diakses dengan jangkauan lebih luas sehingga dapat meningkatkan jumlah akses pembaca. 
                    </p>
                </div>

                <div class="item-skema py-3 wow fadeInUp" data-wow-delay="0.4s">
                    <h5 class="m-0 p-0 my-2">Buku Elektronik ber-eISBN dengan Akses Tertutup</h5>
                    <p class="p-0 m-0">
                        Akses tertutup (closed-access) adalah model publikasi di mana karya ilmiah hanya dapat diakses oleh pembaca yang membayar atau memiliki langganan. Dalam sistem ini, artikel atau buku tidak tersedia secara bebas untuk umum, melainkan dibatasi oleh paywall atau sistem keanggotaan. Akses tertutup membatasi jangkauan pembaca dan umumnya tidak mengizinkan penggunaan ulang tanpa izin khusus, sehingga penyebaran ilmu pengetahuan menjadi lebih terbatas.  Dalam hal ini, strategi distribusi dan penjualan akan didiskusikan antara Ritecs dan penulis untuk mendapatkan kesepakatan. 
                    </p>
                </div>

                <div class="item-skema py-3 wow fadeInUp" data-wow-delay="0.5s">
                    <h5 class="m-0 p-0 my-2">Buku Cetak ber-ISBN</h5>
                    <p class="p-0 m-0">
                        Skema ini berlaku untuk karya ilmiah yang hanya dapat diakses oleh pembaca yang membeli buku. Dalam hal ini, penulis diwajibkan untuk menanggung biaya cetak untuk 100-500 eksemplar buku. Strategi distribusi dan penjualan akan didiskusikan antara Ritecs dan penulis untuk mendapatkan kesepakatan.
                    </p>
                </div>

            </div>


        </div>

        <div class="container py-5">

            <div class="text-center mx-auto pb-md-5 pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Langkah & Tahap</h4>
                <h1 class="display-4 mb-4">Prosedur Penerbitan Buku</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row">
                <div class="col col-12 col-xl-5 p-0 d-none d-xl-block wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex justify-content-center align-items-center h-100 p-3 p-md-5 ps-3 ps-md-0 pb-3 pb-md-0">
                        <img src="{{ ('assets\img\petunjuk2.webp') }}" class="img-fluid img-petunjuk" alt="">
                    </div>
                </div>
                <div class="col col-12 col-xl-7 ">
                    <div class="timeline">
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap pengiriman</h5>
                                <p class="p-0 m-0">Kirim naskah berbahasa Indonesia atau Inggris dalam format .doc melalui e-mail. Anda tidak perlu melakukan pengeditan tata letak halaman, termasuk membuat kover buku. </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.4s">
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
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.6s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Penyuntingan</h5>
                                <p class="p-0 m-0">
                                    Naskah yang dinilai sesuai dan layak akan masuk ke tahap penyuntingan (tata bahasa, tata letak, dan ilustrasi). Untuk  naskah berbahasa Inggris, kami juga akan melakukan proofreading . Jika naskah dalam bahasa Indonesia akan diterbitkan dalam bahasa Inggris, kami akan melakukan terjemahan dan proofreading. Tahap pengeditan naskah berdurasi maksimal 14 hari kerja.                              
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="0.8s">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content rounded">
                                <h5 class="m-0 p-0 mb-1">Tahap Pendaftaran ISBN</h5>
                                <p class="p-0 m-0">
                                    Setelah penyuntingan dan berkas lengkap, kami akan mendaftarkan nomor ISBN untuk penerbitannya. Durasi pada tahap ini mengikuti proses dari Perpusnas, dan dapat dipantau bersama melalui: <a href="https://isbn.perpusnas.go.id/landing_page/pelacakan">Halaman ini</a>
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item  wow fadeInUp" data-wow-delay="1s">
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