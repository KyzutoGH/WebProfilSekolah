@extends ('layouts.layouts')

@section ('content')
<section style="margin-top: 200px; padding-bottom: 80px;">
<div class="container">
    <h2 class="fw-bold mb-4 text-center">Dashboard Admin</h2>
    <p class="text-center fw-bold" style="font-size: 24px; font-family: 'Poppins', sans-serif; color: #2E7D32; margin-top: 20px; margin-bottom: 40px;">
      Selamat Datang Di Halaman Dashboard Admin SMP PGRI Bakung
    </p>
    
    <div class="row g-4">
      <!-- Blog Artikel -->
      <div class="col-lg-3 col-md-6">
          <div class="admin-card text-center shadow-lg rounded-3 border-0 p-3" style="background-color: #e3f2fd;">
              <i class="fas fa-newspaper fa-3x text-primary mb-3"></i>
              <h5 class="fw-bold">Berita Kegiatan</h5>
              <p>Kelola berita kegiatan SMP PGRI Bakung</p>
              <a href="{{route('blog')}}" class="btn btn-primary">Kelola</a>
          </div>
      </div>
      
      <!-- Foto Kegiatan -->
      <div class="col-lg-3 col-md-6">
          <div class="admin-card text-center shadow-lg rounded-3 border-0 p-3" style="background-color: #ffebee;">
              <i class="fas fa-images fa-3x text-danger mb-3"></i>
              <h5 class="fw-bold">Galeri Kegiatan</h5>
              <p>Kelola foto kegiatan siswa SMP PGRI.</p>
              <a href="{{route('photo')}}" class="btn btn-danger">Kelola</a>
          </div>
      </div>
      
      <!-- Pendaftaran Siswa -->
      <div class="col-lg-3 col-md-6">
          <div class="admin-card text-center shadow-lg rounded-3 border-0 p-3" style="background-color: #fff3e0;">
              <i class="fas fa-user-plus fa-3x text-warning mb-3"></i>
              <h5 class="fw-bold">Pendaftaran Siswa</h5>
              <p>Kelola pendaftaran siswa baru.</p>
              <a href="{{ route('admin.ppdb.index') }}" class="btn btn-warning">Kelola</a> 
          </div>
      </div>
      
      <!-- Saran Pengguna -->
      <div class="col-lg-3 col-md-6">
          <div class="admin-card text-center shadow-lg rounded-3 border-0 p-3" style="background-color: #e8f5e9;">
              <i class="fas fa-comments fa-3x text-success mb-3"></i>
              <h5 class="fw-bold">Saran Pengguna</h5>
              <p>Kelola masukan dari pengguna.</p>
              <a href="{{ route('admin.contacts') }}" class="btn btn-success">Kelola</a> 
          </div>
      </div>
  </div>
</div>
</section>
@endsection  
