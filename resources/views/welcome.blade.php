@extends('layouts.layouts')

@section('content')
{{--content--}}

<section id="hero">
  <div class="container text-center text-white">
    <div class="hero-title">
      <h1 class="animate-fade-down">Selamat Datang<br><br>Di SMP PGRI BAKUNG</h1>
      <p class="animate-fade-up">SMP PGRI Bakung adalah sebuah lembaga Sekolah Menengah Pertama swasta yang alamatnya di Dsn Kalimeneng, Kab.Blitar.</p>
    </div>
  </div>
</section>

{{--content--}}


{{---program--}}
<section id="program" style="margin-top: -50px">
  <div class="container">
    <div class="row text-center">
      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500">
        <div class="card p-3 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="{{ asset ('assets/icons/beriman.ico')}}" alt="Icon siswa beriman" class="me-3" style="width: 40px; height: 40px;">

            <h5 class="mb-0">Siswa Yang Beriman</h5>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500">
        <div class="card p-3 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="{{ asset ('assets/icons/berakhlak.ico')}}" alt="Icon Berakhlak Mulia" class="me-3" style="width: 40px; height: 40px;">

            <h5 class="mb-0">Berakhlak Mulia</h5>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500">
        <div class="card p-3 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="{{ asset ('assets/icons/berprestasi.ico')}}" alt="Icon Siswa berprestasi" class="me-3" style="width: 40px; height: 40px;">

            <h5 class="mb-0">Siswa Berprestasi</h5>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500">
        <div class="card p-3 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="{{ asset ('assets/icons/wawasan.ico')}}" alt="Icon Berwawasan global" class="me-3" style="width: 40px; height: 40px;">
            <h5 class="mb-0">Berwawasan Global</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{---program--}}


{{-- Poster Pendaftaran --}}
<section id="poster-pendaftaran" class="py-5" style="background-color: #f8f9fa;">
  <div class="container-fluid px-2"data-aos="fade-left"> <!-- Reduced padding -->
    <div class="row justify-content-center">
      <div class="col-12 col-xxl-11"> <!-- Increased column width -->
        <div class="card border-0 shadow-lg">
          <div class="card-body p-4 p-md-5">
            {{-- Header Section --}}
            <div class="text-center mb-5"> <!-- Increased margin bottom -->
              <h2 class="fw-bold text-success mb-3" style="font-size: 2.5rem;"> <!-- Increased font size -->
                Penerimaan Peserta Didik Baru (PPDB) SMP PGRI Bakung
              </h2>
              <p class="text-secondary fs-4"> <!-- Increased font size -->
                Ayo segera daftarkan diri Anda di SMP PGRI Bakung untuk tahun ajaran baru!
              </p>
            </div>
 
            {{-- Image Section --}}
            <div class="px-md-3 mb-5"  data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000"> <!-- Adjusted padding -->
              <img src="{{ asset('assets/images/bannnerppdb.jpg') }}" 
                   class="img-fluid rounded shadow-sm w-100" 
                   style="max-height: 700px; object-fit: cover;"
                   alt="Poster PPDB">
            </div>
 
            {{-- CTA Button Section --}}
            <div class="text-center mt-4">
              <a href="{{ url('/ppdb') }}" 
                 class="btn btn-success btn-lg fw-bold px-5 py-3" 
                 style="font-size: 1.25rem;"> <!-- Increased button font size -->
                 Daftar Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>
 {{-- Akhir Poster Pendaftaran --}}

{{--berita--}}
<section id="berita">
  <div class="container py-5">
    <div class="header-berita text-center mb-5">
      <h2 class="fw-bold">Berita Kegiatan SMP PGRI Bakung</h2>
    </div>

    <div class="row g-4" data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000">
    
    @foreach ($artikels as $item )
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow-lg h-100">
        <img src="{{asset ('storage/artikel/' . $item->image)}}" class="card-img-top img-fluid rounded" alt="Kegiatan Mengaji">
        <div class="card-body">
          <p class="mb-2 text-muted">{{ $item->create_at }}</p>
          <h5 class="card-title fw-bold mb-3">{{$item->judul}}</h5>
          <p class="mb-2 text-muted">
            📅{{ \Carbon\Carbon::parse($item->tanggal_pelaksanaan)->translatedFormat('d F Y') }}
          </p>
          <p class="card-text text-secondary">#smppgribakung</p>
          <a href="/detail/{{$item->slug}}"
             class="btn btn-outline-danger btn-sm">Selengkapnya</a>
        </div>
      </div>
    </div>
    @endforeach 
    </div>
    
    <!-- Footer berita dengan jarak -->
    <div class="footer-berita text-center mt-5">
      <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
    </div>
  </div>
</section>

{{--berita--}}

 

 {{--foto kegiatan--}}
 <section id="foto" class="section-foto parallax" data-aos="zoom-out-up">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <div class="d-flex align-items-center">
        <div class="stripe-putih me-3"></div>
        <h5 class="fw-bold text-white mb-0">Foto Kegiatan</h5>
      </div>
      <div>
        <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
      </div>
    </div>
    <div class="row g-4">
      <!-- Gambar-gambar dengan class .image-link agar bisa menggunakan Magnific Popup -->
      @foreach ($photos as $photo)
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
            <img src="{{ asset('storage/photo/' . $photo->image) }}" class="foto-kegiatan-img rounded shadow" alt="{{ $photo->judul }}">
        </a>
    </div>
  @endforeach    
  </div>
  </div>
</section>
  {{--foto kegiatan--}}
@endsection

