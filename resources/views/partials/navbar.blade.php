<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand p-0">
                <h1 class="text-primary mb-0 "><img src="assets/img/logo/logo-text.webp" alt="Logo"></i></h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ ($title ?? '') === 'Home' ? 'active' : '' }}">Beranda</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ ($title ?? '') === 'About' ? 'active' : '' }}">Tentang</a>
                    <a href="{{ route('service') }}"
                        class="nav-item nav-link {{ ($title ?? '') === 'Service' ? 'active' : '' }}">Layanan</a>
                    <!-- <a href="{{ route('home') }}" class="nav-item nav-link">Book</a> -->
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-item nav-link {{ in_array($title ?? '', ['Buku', 'Jurnal', 'Detail Buku']) ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Publish</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('buku') }}"
                                class="dropdown-item {{ in_array($title ?? '', ['Buku', 'Jurnal', 'Detail Buku']) ? 'active' : '' }}">Buku</a>
                            <a href="{{ route('jurnal') }}" class="dropdown-item">Jurnal</a>
                            <!-- <a href="{{ route('home') }}" class="dropdown-item">Penyuntingan Naskah</a>
                            <a href="{{ route('home') }}" class="dropdown-item">Desain Gragis & Ilustrasi</a>
                            <a href="{{ route('home') }}" class="dropdown-item">Translate & Proofreading</a> -->
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-item nav-link {{ in_array($title ?? '', ['Petunjuk Penulis', 'IRCS Journal', 'Contact']) ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Bantuan</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('petunjuk-penulis') }}"
                                class="dropdown-item {{ ($title ?? '') === 'Petunjuk Penulis' ? 'active' : '' }}">Petunjuk
                                Penulis</a>
                            <a href="{{ route('ircs-journal') }}"
                                class="dropdown-item {{ ($title ?? '') === 'IRCS Journal' ? 'active' : '' }}">IRCS
                                Jurnal</a>
                            <a href="{{ route('contact') }}"
                                class="dropdown-item {{ ($title ?? '') === 'Contact' ? 'active' : '' }}">Kontak</a>
                        </div>
                    </div>
                    <div class="nav-btn px-3">
                        <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="#" id="openLoginBtn"
                            class="btn btn-dark btn-login-me rounded-pill py-2 px-4 ms-3 flex-shrink-0">Masuk</a>

                        <a href="#" id="openRegisterBtn"
                            class="btn btn-outline-dark outline-2 rounded-pill py-2 px-4 ms-2 flex-shrink-0">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                    data-wow-delay=".9s">
                    <i class="fa fa-phone-alt fa-2x"></i>
                    <div class="position-absolute" style="top: 7px; right: 12px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
                <div class="d-flex flex-column ms-3">
                    <span>Call to Our Experts</span>
                    <a href="tel:+ 0123 456 7890"><span class="text-dark">Free: +628 1390 920 585</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                            class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->


<div class="modal fade" id="authModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0 rounded-4">
            
            <div class="auth-container">
                <div class="auth-flipper">
                    
                    <div class="auth-panel auth-panel-front">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="modal-body p-4 p-sm-5">
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="text-center mb-4">
                                        <img src="assets/img/logo/logo-text.webp" alt="Logo" width="72">
                                        <h2 class="fw-bold mt-3 mb-2">Selamat Datang!</h2>
                                        <p class="text-muted">Masuk untuk melanjutkan.</p>
                                    </div>
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="loginEmail" placeholder="nama@email.com">
                                            <label for="loginEmail">Alamat Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                            <label for="loginPassword">Password</label>
                                        </div>
                                        <div class="d-grid mb-3">
                                            <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold">Masuk</button>
                                        </div>
                                    </form>

                                    <div class="d-flex align-items-center my-3">
                                        <hr class="flex-grow-1">
                                        <span class="mx-3 text-muted small">ATAU</span>
                                        <hr class="flex-grow-1">
                                    </div>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-light border w-100 py-2 rounded-pill">
                                            <img src="https://www.google.com/favicon.ico" alt="Google icon" class="me-2" style="width: 16px;">
                                            Masuk dengan Google
                                        </button>
                                    </div>
                                    <div class="text-center mt-4">
                                        <p class="text-muted small">Belum punya akun? <a href="#" id="showRegister" class="fw-bold text-decoration-none">Daftar di sini</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="auth-panel auth-panel-back">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="modal-body p-4 p-sm-5">
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="text-center mb-4">
                                        <img src="assets/img/logo/logo-text.webp" alt="Logo" width="72">
                                        <h2 class="fw-bold mt-3 mb-2">Buat Akun Baru</h2>
                                        <p class="text-muted">Mulai perjalanan Anda.</p>
                                    </div>
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" placeholder="nama@email.com">
                                            <label>Alamat Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" placeholder="Buat Password">
                                            <label>Buat Password</label>
                                        </div>
                                        <!-- <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Nomor Telepon">
                                            <label>Nomor Telepon</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Alamat">
                                            <label>Alamat</label>
                                        </div> -->
                                        <div class="d-grid mb-3">
                                            <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold">Daftar</button>
                                        </div>
                                    </form>

                                    <div class="d-flex align-items-center my-3">
                                        <hr class="flex-grow-1">
                                        <span class="mx-3 text-muted small">ATAU</span>
                                        <hr class="flex-grow-1">
                                    </div>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-light border w-100 py-2 rounded-pill">
                                            <img src="https://www.google.com/favicon.ico" alt="Google icon" class="me-2" style="width: 16px;">
                                            Daftar dengan Google
                                        </button>
                                    </div>
                                    <div class="text-center mt-4">
                                        <p class="text-muted small">Sudah punya akun? <a href="#" id="showLogin" class="fw-bold text-decoration-none">Masuk di sini</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none d-lg-block bg-register-image"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>