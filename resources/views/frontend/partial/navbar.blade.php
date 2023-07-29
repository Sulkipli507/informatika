<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        {{-- <h1 class="m-0"><i class="fa fa-search me-2"></i>Himapsi<span class="fs-5"></span></h1> --}}
        <h1 class="m-0">Himapsi<span class="fs-5"></span></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link">Beranda</a>
            <a href="{{ route('page-profil') }}" class="nav-item nav-link">Profil</a>
            <a href="{{ route('page-sejarah') }}" class="nav-item nav-link">Sejarah</a>
            <a href="project.html" class="nav-item nav-link">Visi & Misi</a>
            <a href="project.html" class="nav-item nav-link">Struktur Organisasi</a>
            <a href="contact.html" class="nav-item nav-link">Kotak saran</a>
        </div>
        <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
        <a href="#" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Login</a>
    </div>
</nav>