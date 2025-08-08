@extends('layouts.main')

@section('title', 'Explore Our Subjects')

@section('content')
<div class="container my-5">

    <div class="text-center pt-4 pb-5 mb-5">
        <h1 class="display-4 fw-bold wow fadeInUp" data-wow-delay="0.1s">Explore Our Subjects</h1>
        <p class="fs-5 text-muted col-lg-8 mx-auto wow fadeInUp" data-wow-delay="0.3s">
            Find a selection of titles from our strong collection of STM (Science, Technology, Medicine) and HSS (Humanities, Social Sciences) eBooks.
        </p>
        <div class="col-lg-6 mx-auto mt-4 wow fadeInUp" data-wow-delay="0.5s">
            <form action="#" method="GET">
                <div class="input-group input-group-lg shadow-sm">
                    <input type="search" class="form-control border-end-0" placeholder="Search for journals, books, series..." aria-label="Search">
                    <button class="btn btn-primary px-4" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-5">

        
        <div class="col-lg-8">
           
            <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                <div class="text-muted">Showing 1-6 of 72 results</div>
                <div class="d-flex align-items-center">
                    <label for="sortBy" class="form-label me-2 mb-0 small text-muted">Sort by:</label>
                    <select class="form-select form-select-sm" id="sortBy" style="width: auto;">
                        <option selected>Relevance</option>
                        <option value="1">Newest</option>
                        <option value="2">Oldest</option>
                        <option value="3">A-Z</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="#" class="pro-v-card">
                        <div class="card-img-container">
                            <img src="https://media.springer.com/lw153/springer-static/cover/journal/13369.jpg" alt="Journal Cover">
                        </div>
                        <div class="card-body">
                            <div class="card-meta small text-muted mb-2">
                                <span><i class="fas fa-user-edit me-1"></i> J. Author, 2+</span>
                            </div>
                            <h5 class="card-title">Arabian Journal for Science and Engineering</h5>
                        </div>
                        <div class="card-footer">
                            <span class="keywords-badge">Engineering</span>
                            <span class="keywords-badge">Science</span>
                        </div>
                    </a>
                </div>

              
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="#" class="pro-v-card">
                        <div class="card-img-container">
                             <img src="https://media.springer.com/lw153/springer-static/cover/series/7818.jpg" alt="Journal Cover">
                        </div>
                        <div class="card-body">
                             <div class="card-meta small text-muted mb-2">
                                <span><i class="fas fa-user-edit me-1"></i> A. Editor, 5+</span>
                            </div>
                            <h5 class="card-title">Lecture Notes in Electrical Engineering</h5>
                        </div>
                        <div class="card-footer">
                            <span class="keywords-badge">Networks</span>
                            <span class="keywords-badge">Circuits</span>
                        </div>
                    </a>
                </div>

            
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                   <a href="#" class="pro-v-card">
                        <div class="card-img-container">
                           <img src="https://media.springer.com/lw153/springer-static/cover/book/9783319944630.jpg" alt="Book Cover">
                        </div>
                        <div class="card-body">
                             <div class="card-meta small text-muted mb-2">
                                <span><i class="fas fa-user-edit me-1"></i> C. Aggarwal</span>
                            </div>
                            <h5 class="card-title">Neural Networks and Deep Learning</h5>
                        </div>
                        <div class="card-footer">
                            <span class="keywords-badge">AI</span>
                            <span class="keywords-badge">Deep Learning</span>
                        </div>
                    </a>
                </div>

                 <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                   <a href="#" class="pro-v-card">
                        <div class="card-img-container">
                           <img src="https://media.springer.com/lw153/springer-static/cover/journal/432.jpg" alt="Journal Cover">
                        </div>
                        <div class="card-body">
                             <div class="card-meta small text-muted mb-2">
                                <span><i class="fas fa-user-edit me-1"></i> M. Editor, 4+</span>
                            </div>
                            <h5 class="card-title">Journal of Cancer Research</h5>
                        </div>
                        <div class="card-footer">
                            <span class="keywords-badge">Medicine</span>
                            <span class="keywords-badge">Oncology</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                   <a href="#" class="pro-v-card">
                        <div class="card-img-container">
                           <img src="https://media.springer.com/lw153/springer-static/cover/book/9783030113574.jpg" alt="Book Cover">
                        </div>
                        <div class="card-body">
                             <div class="card-meta small text-muted mb-2">
                                <span><i class="fas fa-user-edit me-1"></i> L. Wong, 3+</span>
                            </div>
                            <h5 class="card-title">Data Mining and Analysis</h5>
                        </div>
                        <div class="card-footer">
                            <span class="keywords-badge">Data Science</span>
                            <span class="keywords-badge">Big Data</span>
                        </div>
                    </a>
                </div>

            
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                   <a href="#" class="pro-v-card">
                        <div class="card-img-container">
                           <img src="https://media.springer.com/lw153/springer-static/cover/journal/10450.jpg" alt="Journal Cover">
                        </div>
                        <div class="card-body">
                             <div class="card-meta small text-muted mb-2">
                                <span><i class="fas fa-user-edit me-1"></i> S. Gupta, 7+</span>
                            </div>
                            <h5 class="card-title">Multimedia Tools and Applications</h5>
                        </div>
                        <div class="card-footer">
                            <span class="keywords-badge">Multimedia</span>
                            <span class="keywords-badge">Software</span>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Paginasi --}}
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

       
        <div class="col-lg-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Browse by Category</h5>
                        <div class="list-group list-group-flush subject-list">
                            <a href="#" class="list-group-item list-group-item-action active">
                                <i class="fas fa-star me-2"></i> All Subjects
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Astronomy</a>
                            <a href="#" class="list-group-item list-group-item-action">Behavioral Sciences</a>
                            <a href="#" class="list-group-item list-group-item-action">Biomedical Sciences</a>
                            <a href="#" class="list-group-item list-group-item-action">Chemistry</a>
                            <a href="#" class="list-group-item list-group-item-action">Computer Science</a>
                            <a href="#" class="list-group-item list-group-item-action">Earth Sciences</a>
                            <a href="#" class="list-group-item list-group-item-action">Engineering</a>
                            <a href="#" class="list-group-item list-group-item-action">Mathematics</a>
                            <a href="#" class="list-group-item list-group-item-action">Physics</a>
                            <a href="#" class="list-group-item list-group-item-action">Social Sciences</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection