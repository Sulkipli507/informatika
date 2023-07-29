@extends('frontend.master')
@section('hero')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Sejarah</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Sejarah</li>
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
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Sejarah</h6>
            <h2 class="mt-2">Sejarah terbentuknya HIMAPSI</h2>
        </div>
        <p class="mb-4 text-center">Organisasi ini bernama Himpunan Mahasiswa Program Studi Informatika fakultas teknik universitas sulawesi barat yang disingkat HIMAPSI FT-UNSULBAR
        </p>
        <div class="row g-3">
            <div class="col-sm-6">
                <h6 class="mb-3"><i class="fa fa-calendar text-primary me-2"></i>Waktu</h6>
                <p class="mb-4">Organisasi ini didirikan pada tanggal 13 Juni 2015 di Kab. Soppeng Provinsi Sulawesi Selatan</p>
            </div>
            <div class="col-sm-6">
                <h6 class="mb-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Tempat</h6>
                <p class="mb-4">Organisasi ini berkedudukan di Kampus Fakultas Teknik, Universitas Sulawesi Barat, Kab. Majene Provinsi Sulawesi Barat.</p>
            </div>
        </div>
    </div>
</div>

@endsection