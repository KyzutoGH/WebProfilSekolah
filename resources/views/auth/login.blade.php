@extends('layouts.layouts')

@section('content')
<section class="d-flex justify-content-center align-items-center" 
    style="min-height: 100vh; background: url('{{ asset('assets/images/bg-login.jpg') }}') no-repeat center center/cover; margin-top: 100px;">
    
    <div class="container p-4 col-md-6 col-lg-4 shadow-lg rounded" 
        style="background: rgba(255, 255, 255, 0.541); backdrop-filter: blur(0px); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); padding: 30px;">
        
        <h3 class="fw-bold text-center mb-2 text-dark">Login Admin SMP PGRI</h3>

        <div class="text-center mb-2">
            <img src="{{ asset('assets/icons/logo PGRI.png') }}" alt="Logo SMP PGRI" style="width: 200px; height: 150px;">
        </div>

        <form action="/login" method="POST" class="mt-2">
            @csrf

            <div class="mb-2">
                <label for="email" class="form-label text-dark">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-dark">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>

        </form>
    </div>
</section>
@endsection  
