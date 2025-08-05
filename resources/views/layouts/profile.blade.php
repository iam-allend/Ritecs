<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{ ucfirst($title ?? 'Ritecs') }} - Ritecs</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="assets/lib/animate/animate.min.css"/>
        <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/img/logo/logo.webp">
    
    </head>

<body class="bg-light">

<!-- Navbar untuk Mobile -->
<nav class="navbar navbar-light bg-white border-bottom d-md-none">
    <div class="container">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
            <i class="bi bi-list"></i>
        </button>
        <span class="navbar-text fw-bold">Profile</span>
    </div>
</nav>

<div class="container">
    <div class="row">
        <!-- Sidebar Desktop -->
        <div class="col-md-3 col-lg-2 d-none d-md-block sidebar bg-white mt-3 rounded">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title ?? '') === 'Dashboard' ? 'active' : '' }}" href="{{ route('profile.dashboard') }}">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title ?? '') === 'Member' ? 'active' : '' }}" href="{{ route('profile.member') }}">
                            <i class="bi bi-people me-2"></i> Member
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title ?? '') === 'Settings' ? 'active' : '' }}" href="{{ route('profile.settings') }}">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sidebar Offcanvas Mobile -->
        <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="sidebarOffcanvas">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title ?? '') === 'Dashboard' ? 'active' : '' }}" href="{{ route('profile.dashboard') }}">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title ?? '') === 'Member' ? 'active' : '' }}" href="{{ route('profile.member') }}">
                            <i class="bi bi-people me-2"></i> Member
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title ?? '') === 'Settings' ? 'active' : '' }}" href="{{ route('profile.settings') }}">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Konten -->
        <main class="col-md-9 col-lg-10 ms-sm-auto px-md-4 pt-3">
            <div class="container-md bg-white p-4 rounded">
                @yield('content')
            </div>
        </main>
    </div>
</div>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/lib/wow/wow.min.js"></script>
        <script src="assets/lib/easing/easing.min.js"></script>
        <script src="assets/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/lib/counterup/counterup.min.js"></script>
        <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="assets/js/main.js"></script>
    </body>

</html>