@extends('layouts.layouts')

@section('content')
<section id="foto" style="margin-top: 100px" class="section-foto parallax" data-aos="zoom-out-up">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <div class="d-flex align-items-center">
        <div class="stripe-putih me-3"></div>
        <h5 class="fw-bold text-white mb-0">Foto Kegiatan SMP PGRI Bakung</h5>
      </div>
    </div>
    <div class="row g-4">
      @foreach($photos as $photo)
      <div class="col-lg-3 col-md-6 col-sm-6">
          <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
              <img src="{{ asset('storage/photo/' . $photo->image) }}" class="foto-kegiatan-img rounded shadow" alt="{{ $photo->judul }}">
          </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
