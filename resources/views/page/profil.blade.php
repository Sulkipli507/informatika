@extends('frontend.master')
@section('hero')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Profil</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Profil</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Profil</h6>
                    <h2 class="mt-2">Himpunan Mahasiswa Program Studi Informatika</h2>
                </div>
                <p class="mb-4">Himpunan Mahasiswa PROGRAM STUDI Informatika Universitas Sulawesi Barat 
                    merupakan bagian dari masyarakat ilmiah yang membentuk Sumber 
                    Daya Manusia (SDM) yang menguasai Ilmu Pengetahuan dan Teknologi khususnya 
                    Informasi dan Komunikasi. Dan berkewajiban untuk turut serta berperan aktif dalam 
                    mewujudkan Tri Darma Perguruan Tinggi.</p>
                <p class="mb-4">Organisasi ini bertujuan membentuk Mahasiswa Program Studi Informatika
                     yang bertaqwa kepada Tuhan Yang Maha Esa, cakap, berwawasan luas dan bertanggung
                      jawab sebagai insan akademik yang berkiprah dalam bidang Teknologi Informasi dan
                       dapat berorientasi langsung dalam masyarakat.
                </p>
                {{-- <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                    </div>
                </div> --}}
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('frontend/img/about.jpg')}}">
            </div>
        </div>
    </div>
</div>
@endsection
