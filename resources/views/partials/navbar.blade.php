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
                            <a href="{{ route('home') }}" class="nav-item nav-link {{ ($title ?? '') === 'home' ? 'active' : '' }}">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link {{ ($title ?? '') === 'about' ? 'active' : '' }}">About</a>
                            <a href="service.html" class="nav-item nav-link ">Services</a>
                            <a href="{{ route('home') }}" class="nav-item nav-link">Book</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Publish</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{ route('home') }}" class="dropdown-item">Buku</a>
                                    <a href="{{ route('home') }}" class="dropdown-item">Jurnal</a>
                                    <a href="{{ route('home') }}" class="dropdown-item">Penyuntingan Naskah</a>
                                    <a href="{{ route('home') }}" class="dropdown-item">Desain Gragis & Ilustrasi</a>
                                    <a href="{{ route('home') }}" class="dropdown-item">Translate & Proofreading</a>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="nav-item nav-link {{ ($title ?? '') === 'contact' ? 'active' : '' }}">Contact</a>
                            <div class="nav-btn px-3">
                                <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                <a href="#" class="btn btn-dark rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
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
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->