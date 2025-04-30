@extends('layouts.layouts')

@section('content')
<!-- Hero Section -->
<section id="profil">
    <div class="container py-5" style="margin-top: 100px">
        <div class="header-profil text-center mb-5">
            <h2 class="fw-bold text-success">Profil SMP PGRI Bakung</h2>
            <div class="green-line"></div>
        </div>
        
        <div class="row align-items-start mb-5" data-aos="fade-up">
            <!-- Kolom Gambar - dengan kelas kustom untuk posisi -->
            <div class="col-lg-6 text-center image-container">
                <img src="{{ asset('assets/images/bg-login.jpg') }}" 
                     alt="Foto Sekolah" 
                     class="img-fluid rounded shadow-lg w-100 hover-effect">
            </div>
            
            
            <!-- Kolom Teks -->
            <div class="col-lg-6 my-auto">
                <div class="ps-lg-5 text-center text-lg-start">
                    <h3 class="mb-4"><i class="fas fa-school text-success me-2"></i>Sejarah SMP PGRI Bakung</h3>
                    <p class="lead">
                        SMP PGRI Bakung adalah sekolah swasta yang berlokasi di Kecamatan Bakung, Kabupaten Blitar Provinsi Jawa Timur. Sekolah ini berdiri sejak <b>1 April 1984</b> berdasarkan SK No. 12/SK/PEN/SMP/YAY/IV/1984 dan berada di bawah naungan  Kementerian Pendidikan dan Kebudayaan. Saat ini, sekolah ini telah terakreditasi <b>B</b> sesuai SK No. 175/BAP-S/M/SK/X/2015.
                    </p>
                    <p class="lead">
                        Saat ini, SMP PGRI Bakung dipimpin oleh <b>Uni Winarsih, S.Pd.</b> dengan <b>39 siswa</b> dan <b>10 guru profesional</b>. Sekolah ini memiliki berbagai fasilitas pendukung, termasuk akses internet, listrik dari PLN, serta sarana pembelajaran yang memadai untuk menunjang kegiatan belajar mengajar.
                    </p>
                    <p class="lead">
                        Dengan visi mencetak generasi <b>berakhlak mulia, cerdas, dan berwawasan luas</b>, SMP PGRI Bakung terus meningkatkan kualitas pendidikan dan layanannya. Sekolah ini siap menerima siswa baru dan membimbing mereka mencapai masa depan yang cerah.
                    </p>
        
                    <!-- Statistik -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-users text-success fa-2x me-3"></i>
                                <div>
                                    <h5 class="mb-0">39</h5>
                                    <p class="mb-0">Siswa Aktif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chalkboard-teacher text-success fa-2x me-3"></i>
                                <div>
                                    <h5 class="mb-0">10</h5>
                                    <p class="mb-0">Guru Profesional</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Visi Misi Section -->
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-success">Visi & Misi</h3>
                <div class="green-line"></div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 green-card">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-success mb-3">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="card-title mb-3">Visi</h4>
                        <p class="card-text">Mewujudkan warga sekolah yang beriman, berakhlak mulia, berprestasi, berwawasan global dan peduli terhadap lingkungan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 green-card">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-success mb-3">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="card-title mb-3">Misi</h4>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Melaksanakan pembelajaran sekolah beserta mengaji</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Menciptakan lingkungan yang menyenangkan, menantang dan berakhlak mulia</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Mewujudkan pembelajaran dengan pembelajaran pembelajaran santivic dan mewujudkan mewujudkan lulusan yang berprestasi dibidang non akademik</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Melaksanakan pembelajaran berbasis IT</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Menciptakan lingkungan sekolah yang sehat, aman, ramah dan menyenangkan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-success">Struktur Organisasi</h3>
                <div class="green-line"></div>
            </div>
            <div class="col-12">
                <div class="card shadow-lg border-0 green-card">
                    <div class="card-body p-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/struktur.png') }}" alt="Struktur Organisasi" class="img-fluid rounded shadow-lg mx-auto d-block" data-aos="zoom-in-down">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include required CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<style>
    :root {
        --primary-green: #198754;
        --light-green: #e8f5e9;
        --hover-green: #15704d;
    }

    .green-line {
        height: 3px;
        width: 100px;
        background-color: var(--primary-green);
        margin: 15px auto;
    }

    .green-card {
        background: linear-gradient(145deg, #ffffff 0%, var(--light-green) 100%);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-left: 5px solid var(--primary-green) !important;
    }

    .green-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(25, 135, 84, 0.175) !important;
    }

    .fas {
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .green-card:hover .fas {
        transform: scale(1.1);
        color: var(--hover-green);
    }

    .text-success {
        color: var(--primary-green) !important;
    }

    .card-body ul li {
        position: relative;
        padding-left: 10px;
    }

    .card-body ul li i {
        position: absolute;
        left: -20px;
        top: 5px;
    }

    section {
        background-color: #fdfdfd;
    }

    .header-profil h2 {
        position: relative;
        display: inline-block;
    }

    .header-profil h2:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 3px;
        background: var(--primary-green);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .header-profil h2:hover:after {
        transform: scaleX(1);
    }

    .hover-effect {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .hover-effect:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    .image-container {
    position: relative;
    top:  60px; /* Sesuaikan nilai ini - nilai negatif mendorong ke atas */
    margin-bottom: -50px; /* Kompensasi untuk mencegah spacing berlebih */
}
</style>
@endsection