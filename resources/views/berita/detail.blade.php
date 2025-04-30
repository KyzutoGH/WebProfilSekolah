@extends('layouts.layouts')

@section('content')
<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">
        <!-- Centered title with bottom margin -->
        <h2 class="card-title fw-bold mb-4 text-center">{{ $artikel->judul }}</h2>
        
        <!-- Image container with reduced height and width -->
        <div class="image-container mb-4 mx-auto" style="max-height: 350px; max-width: 600px; overflow: hidden;">
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" 
                 class="card-img-top img-fluid w-100 h-100 object-fit-cover" 
                 alt="Kegiatan Mengaji"
                 style="object-position: center;">
        </div>

        <div class="card-body px-0">
            <!-- Date with proper spacing -->
            <p class="mb-3 text-muted">{{ $artikel->create_at }}</p>
            
            <!-- Article text with proper line height and justified alignment -->
            <div class="card-text text-secondary" style="line-height: 1.8; text-align: justify;">
                {!! $artikel->desc !!}
            </div>
        </div>

        <!-- Back button with proper spacing -->
        <div class="text-center mt-4">
            <a href="{{ url('/berita') }}" class="btn btn-primary">Kembali ke Halaman Berita</a>
        </div>
    </div>
</section>
@endsection