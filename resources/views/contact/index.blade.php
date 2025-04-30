@extends('layouts.layouts')

@section('content')
<section id="kontak" class="min-vh-100" style="background: linear-gradient(to bottom, #ebf3ff, #ffffff)">
    <div class="container py-5" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-4">
                <h2 class="display-5 fw-bold text-dark mb-2">Kontak dan Saran</h2>
                <p class="text-muted fs-5">Jika ada kritik atau saran, silakan hubungi kami melalui formulir di bawah ini.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg rounded-3">
                    <div class="card-header text-center py-3">
                        <h4 class="fw-bold mb-1">Hubungi Kami</h4>
                    </div>

                    <div class="card-body p-4">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                                    <input type="email" 
                                           name="email" 
                                           class="form-control border-2 py-2 @error('email') is-invalid @enderror" 
                                           placeholder="nama@email.com"
                                           required>
                                </div>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="bi bi-person"></i></span>
                                    <input type="text" 
                                           name="name" 
                                           class="form-control border-2 py-2 @error('name') is-invalid @enderror" 
                                           placeholder="Masukkan nama lengkap Anda"
                                           required>
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Pesan</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="bi bi-chat-text"></i></span>
                                    <textarea name="message" 
                                              rows="4" 
                                              class="form-control border-2 py-2 @error('message') is-invalid @enderror" 
                                              placeholder="Tulis pesan Anda di sini..."
                                              required></textarea>
                                </div>
                                @error('message') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-send"></i>
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
