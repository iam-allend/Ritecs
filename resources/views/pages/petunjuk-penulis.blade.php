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