
@extends('layouts.main')

@section('content')

<div class="container-fluid feature bg-light pb-5 pt-3">

    <div class="container">
        <p class="normal-text">Publish > <a class="normal-text" href="{{ ('/buku') }}">Buku</a> > <a class="text-dark small" href="{{ ('/detail-buku') }}">Pengantar Pipeline Animasi Berbasis AI</a></h4>
    </div>
    <!-- Buku Start -->
    <div class="container-fluid blog py-5 bg-white">
        <div class="container pb-5">
            
            <div class="card mb-3 h-100 border-0 shadow-none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="blog-img rounded shadow">
                            <img src="{{ ('assets/img/buku.png') }}" class="img-fluid w-100 object-fit-contain rounded-start rounded-end" alt="...">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ps-md-4 ps-lg-5 ps-2 pt-lg-3 pt-4">
                            <a href="#" class="h3 d-inline-block mb-2">Pengantar Pipeline Animasi Berbasis AI</a>

                            <div class="d-grid justify-content-start mb-3 flex-wrap">
                                <div class="content my-1">
                                    <span class="bi bi-pen text-dark small"></span>
                                    <span>
                                        <span class="text-dark h6 ms-1"> Penulis : </span>
                                        <span>Arry Maulana Syarif, Sugiyanto, Lisa Mardiana, Tunggul Banjaransari, Deddy Award Widya Laksana</span>
                                    </span>
                                </div>
                                <div class="content my-1">
                                    <span class="bi bi-journal-album text-dark small"></span>
                                    <span>
                                        <span class="text-dark h6 ms-1"> Penerbit : </span>
                                        <span>Ritecs</span>
                                    </span>
                                </div>
                                 <div class="content my-1">
                                    <span class="bi bi-file-earmark-text text-dark small"></span>
                                    <span>
                                        <span class="text-dark h6 ms-1"> Halaman : </span>
                                        <span>125 halaman</span>
                                    </span>
                                </div>
                                <div class="content my-1">
                                    <span class="bi bi-arrows-fullscreen text-dark small"></span>
                                    <span>
                                        <span class="text-dark h6 ms-1"> Ukuran : </span>
                                        <span>16 x 23 cm</span>
                                    </span>
                                </div>
                                <div class="content my-1">
                                    <span class="bi bi-calendar-plus text-dark small"></span>
                                    <span>
                                        <span class="text-dark h6 ms-1"> Diterbitkan : </span>
                                        <span>30 Desember 2022</span>
                                    </span>
                                </div>
                                <div class="content my-1">
                                    <span class="bi bi-upc-scan text-dark small"></span>
                                    <span>
                                        <span class="text-dark h6 ms-1"> ISBN : </span>
                                        <span>978-634-04-1924-5</span>
                                    </span>
                                </div>
                                <div class="content my-1 d-flex">
                                    <span class="bi bi-cash-stack text-dark small"></span>
                                    <span class="text-dark h6 ms-2"> Harga : </span>
                                    <span class="d-grid d-md-flex  align-items-center">
                                        <span class="bg-warning-soft rounded-pill my-1 my-md-0 px-3 py-0 text-dark small mx-1">Rp 91.777 (cetak)</span> 
                                        <span class="bg-secondary-soft rounded-pill my-1 my-md-0 px-3 py-0 text-dark small mx-1">Rp 27.999 (pdf)</span>
                                    </span>
                                </div>

                                <div class="content my-1">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item p-0 border-0">
                                            <h2 class="accordion-header p-0 border-0">
                                                <button class="accordion-button bg-transparent text-dark p-0 py-2 h6 rounded-0 outline-0 border-bottom-1 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Sinopsis : 
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show p-0 border-0" data-bs-parent="#accordionExample">
                                                <div class="accordion-body p-0 border-0 pt-1">
                                                    Pengantar Produksi Animasi Berbasis AI adalah buku panduan praktis dan konseptual yang menyajikan gambaran menyeluruh tentang bagaimana teknologi kecerdasan buatan (AI), khususnya generative AI, mulai mendefinisikan ulang cara animasi diproduksi. Dirancang untuk pelajar, pendidik, kreator pemula, serta profesional industri kreatif, buku ini memandu pembaca memahami transformasi dalam setiap tahap produksi animasi, dari penyusunan naskah hingga distribusi dan evaluasi, dengan dukungan teknologi AI. 
                                                    Buku ini terbagi menjadi sepuluh bab yang sistematis. Bab pertama membahas fondasi kecerdasan buatan dan aplikasinya dalam dunia animasi. Bab kedua membawa pembaca menyelami proses kerja tradisional dalam industri animasi serta pergeserannya ke pipeline berbasis AI. Bab-bab selanjutnya secara detail mengeksplorasi integrasi AI dalam setiap tahapan produksi: penulisan naskah, pembuatan storyboard, desain karakter dan lingkungan, pemodelan aset, animasi 2D/3D/stop-motion, penyuntingan audio, komposisi video, hingga proses distribusi dan promosi. Setiap bab tidak hanya menjelaskan teori dan proses teknis, tetapi juga memperkenalkan alat-alat AI terkini yang dapat diakses oleh kreator modern, seperti Runway, Adobe Sensei, dan berbagai text-to-image/video generator, dilengkapi dengan pembahasan etika, hak cipta, serta kolaborasi manusia dan mesin. Di bagian akhir, glosarium istilah membantu pembaca memahami berbagai konsep penting dalam animasi dan sinematografi.
                                                    Dengan pendekatan yang aplikatif dan inklusif, buku ini menjadi jembatan antara dunia seni visual dan teknologi mutakhir, memperkenalkan paradigma baru produksi animasi yang lebih efisien, kolaboratif, dan imajinatif di era kecerdasan buatan.                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="content mt-4">
                                    <span>
                                        <span class="text-dark h6"> Atribusi yang direkomendasikan : </span>
                                        <br>
                                        <span>"Syarif, A. M., Sugiyanto, S., Mardiana, L., Banjaransari, T., & Laksana, D. A. W. (2025). Pengantar pipeline animasi berbasis AI. Ritecs."</span>
                                    </span>
                                </div>
    
                                <div class="content mt-4">
                                    <div class="d-flex justify-content-between gap-3">
                                        <a href="" class="w-100 rounded-pill btn btn-outline-dark small"><i class="fas fa-download me-2"></i>Unduh E-Book</a>
                                        <a href="" class="w-100 rounded-pill btn-login-me btn btn-dark small"><i class="bi bi-cart-plus-fill me-2"></i>Pemesanan</a>
                                    </div>
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