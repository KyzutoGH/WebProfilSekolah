@extends('layouts.layouts')

@section('content')
<h1>Daftar Berita</h1>
{{--berita--}}
<section id="berita">
    <div class="container py-5" style="margin-top: 100px">
    <div class="header-berita text-center mb-5">
      <h2 class="fw-bold">Berita Kegiatan SMP PGRI Bakung</h2>
    </div>

    <div class="row g-4" data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000">
      
    @foreach ($artikels as $item)
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow-lg h-100">
        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="card-img-top img-fluid rounded" alt="Kegiatan Mengaji">
        <div class="card-body">
          <h5 class="card-title fw-bold mb-3">{{ $item->judul }}</h5>
          <p class="mb-2 text-muted">
            📅{{ \Carbon\Carbon::parse($item->tanggal_pelaksanaan)->translatedFormat('d F Y') }}
          </p>
          <p class="card-text text-secondary">#smppgribakung</p>
          <a href="/detail/{{ $item->slug }}" class="btn btn-outline-danger btn-sm">Selengkapnya</a>
        </div>
      </div>
    </div>
    @endforeach
      
    </div> 
  </div>
</section>

{{--berita--}}
@endsection
