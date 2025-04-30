<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset ('assets/icons/logo PGRI.png')}}">
        <title>Profile Smp PGRI Bakung</title>
       
        {{-- Meta untuk tampilan di Whatsapp --}}
        @if (Request::segment(1) == '')
            <meta property="og:title" content="SMP PGRI BAKUNG" />
            <meta name="description" content="SMP PGRI Bakung adalah sebuah lembaga Sekolah Menengah Pertama swasta yang alamatnya di Dsn Kalimeneng, Kab. Blitar." />
            <meta property="og:url" content="http://smppgribakung.com" />
            <meta property="og:description" content="Profile Smp PGRI Bakung"/>
            <meta property="og:image" content="{{ asset('assets/icons/logo PGRI.png') }}" />
            <meta property="og:type" content="article" />
        @elseif (Request::segment(1) == "detail")
            <title>Profile Smp PGRI Bakung<</title>
            <meta property="og:title" content="{{ $artikel->judul }}" />
            <meta name="description" content="{{ $artikel->judul }}" />
            <meta property="og:url" content="http://smppgribakung.com/detail/{{ $artikel->slug }}" />
            <meta property="og:description" content="{{ $artikel->judul }}" />
        
            @if ($artikel->image)
                <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
            @else
                <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
            @endif
        
            <meta property="og:type" content="article" />

            <title>Profile Smp PGRI Bakung | {{ $artikel->title}} </title>
        @endif
        
       
        

        {{--framework boostrap--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
        {{--aos animasi--}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        {{--summernote css --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet"  >
       
        {{--Magnific--}}
        <link rel="stylesheet" href="{{asset('assets/css/magnific.css')}}"> 
     
        {{--css assets--}}
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">  

        <!-- SweetAlert2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.9/dist/sweetalert2.min.css" rel="stylesheet">
      
        {{--package font--}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    </head>
    <body>


{{--Navbar--}}
@include('layouts.navbar')
{{--Content--}}
@yield('content')
{{-- Footer --}}
<section id="footer" class="bg-white shadow-lg">
    <div class="container py-5">
        <footer>
            <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-center">
                <!-- Kolom 1: Navigasi -->
                <div class="col-12 col-md-3 mb-4">
                    <h5 class="fw-bold text-uppercase text-dark mb-3">Navigasi</h5>
                    <div class="d-flex">
                        <ul class="nav flex-column me-5">
                            <li class="nav-item mb-2"><a href="{{ url('/') }}" class="nav-link p-0 text-dark hover-underline">Beranda</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('/berita') }}" class="nav-link p-0 text-dark hover-underline">Berita </a></li>
                            <li class="nav-item mb-2"><a href="{{ url('/kegiatan') }}" class="nav-link p-0 text-dark hover-underline">Kegiatan Sekolah</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('/foto') }}" class="nav-link p-0 text-dark hover-underline">Galeri Sekolah</a></li>
                        </ul>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{ url('/profil') }}" class="nav-link p-0 text-dark hover-underline">Profil Sekolah</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('/prestasi') }}" class="nav-link p-0 text-dark hover-underline">Prestasi</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('/ppdb') }}" class="nav-link p-0 text-dark hover-underline">Info Pendaftaran</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('/contact') }}" class="nav-link p-0 text-dark hover-underline">Kontak</a></li>
                        </ul>
                    </div>
                </div>
  
                <!-- Kolom 2: Kontak -->
                <div class="col-12 col-md-3 mb-4">
                  <h5 class="fw-bold text-uppercase text-dark mb-3">Kontak Kami</h5>
                  <ul class="nav flex-column">
                      <li class="nav-item mb-2">
                          <a href="mailto:smppgribakung@gmail.com" class="nav-link p-0 text-dark hover-underline">
                              smppgribakung@gmail.com
                          </a>
                      </li>
                      <li class="nav-item mb-2">
                          <a href="tel:086xxxxxxx" class="nav-link p-0 text-dark hover-underline">
                              081 556 721 571
                          </a>
                      </li>
                  </ul>
                  <div class="d-flex gap-3 mt-2">
                      <a href="https://www.facebook.com/slamet.rijadi.71" target="_blank" class="text-decoration-none">
                          <i class="fab fa-facebook fa-2x text-primary"></i>
                      </a>
                  </div>
                </div>
  
                <!-- Kolom 3 & 4: Alamat + Google Maps -->
                <div class="col-12 col-md-6 mb-4">
                  <div class="row">
                      <!-- Alamat Sekolah -->
                      <div class="col-md-6">
                          <h5 class="fw-bold text-uppercase text-dark mb-3">Alamat Sekolah</h5>
                          <p class="text-dark">
                              Dsn Kalimeneng, Sidomulyo, Kec. Bakung, Kab. Blitar, Jawa Timur.
                          </p>
                      </div>
                     <div class="col-md-6">
    <h5 class="fw-bold text-uppercase text-dark mb-3">Lokasi Kami</h5>
    <div class="ratio ratio-16x9 rounded shadow">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.028670539372!2d112.18139267514667!3d-8.098558391930213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78c5ee089eb3ff%3A0x2230ac0009ddf71d!2sSMP%20PGRI%20BAKUNG%20SIDOMULYO!5e0!3m2!1sid!2sid!4v1719795090094!5m2!1sid!2sid" 
            width="100%" 
            height="500" 
            style="border:0; border-radius:10px;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

                  </div>
                </div>
            </div>
        </footer>
    </div>
  </section>
  
  <!-- Footer bawah -->
  <section class="bg-light border-top shadow-sm">
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-muted">© 2025 SMP PGRI Bakung</div>
            <div class="d-flex">
                <a href="{{ url('/syarat-ketentuan') }}" class="me-4 text-muted text-decoration-none hover-underline">
                    Syarat & Ketentuan
                </a>
                <a href="{{ url('/kebijakan') }}" class="text-muted text-decoration-none hover-underline">
                    Kebijakan Privasi
                </a>
            </div>
        </div>
    </div>
  </section>
  
{{-- Footer --}}

    </div>
  </section>


    {{--framework boostrap--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     {{--aos animasi--}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--- jQuery Magnific--->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/magnific.js')}}"></script>

    {{--summernote Js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

    {{--SweetAlert2 JS--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.9/dist/sweetalert2.min.js"></script>
    
</body>
  
  <script>
    $(document).ready(function(){
      $('#summernote').summernote({
        height:200,
      });
    });
 
    //blog untuk pop up CRUD ARTIKEL
    // Integrasi pop up menambahkan artikel 
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    });

   // Integrasi SweetAlert untuk  update artikel
   @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Artikel Berhasil Diperbarui',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

    //code untuk menghapus artikel konfirmasi pengguna
    document.addEventListener("DOMContentLoaded", function () {
        // Tangani klik tombol hapus
        document.querySelectorAll(".btn-delete").forEach(button => {
            button.addEventListener("click", function () {
                let form = this.closest("form"); // Ambil form terkait

                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Artikel ini akan dihapus secara permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Jika "Ya", kirim form
                    }
                });
            });
        });

        // Tampilkan pop-up hanya jika session "success" ada
        if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Artikel Berhasil Dihapus',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        endif
    });


//script navbar scroll 
    const navbar = document.querySelector(".fixed-top");
    const navLinks = document.querySelectorAll(".nav-link");

    // Periksa apakah berada di halaman "/"
    const isHomePage = window.location.pathname === "/";

    window.onscroll = () => {
        if (window.scrollY > 100) {
            navbar.classList.add("scroll-nav-active");
            navbar.classList.add("text-nav-active");
            navbar.classList.remove("navbar-dark");

            // Jika di halaman "/", ubah semua tulisan navbar menjadi hitam saat scroll
            if (isHomePage) {
                navLinks.forEach((link) => {
                    link.classList.remove("text-white");
                    link.classList.add("text-dark");
                });
            }
        } else {
            navbar.classList.remove("scroll-nav-active");
            navbar.classList.remove("text-nav-active");
            navbar.classList.add("navbar-dark");

            // Jika di halaman "/", kembalikan tulisan navbar menjadi putih saat tidak scroll
            if (isHomePage) {
                navLinks.forEach((link) => {
                    link.classList.remove("text-dark");
                    link.classList.add("text-white");
                });
            }
        }
    };

    // Inisialisasi animasi AOS 
    AOS.init();
    // Inisialisasi Magnific Popup untuk elemen dengan class `.image-link` menampilkan pop-up gambar
$(document).ready(function () {
    $('.image-link').magnificPopup({
        type: 'image', // Menentukan bahwa popup ini adalah untuk gambar

        // Konfigurasi untuk mendukung tampilan retina (high DPI)
        retina: {
            ratio: 1, // Skala default untuk gambar retina

            // Fungsi untuk mengganti sumber gambar agar mendukung layar retina
            replaceSrc: function (item, ratio) {
                return item.src.replace(/\.\w+$/, function (m) {
                    return '@2x' + m; // Menambahkan '@2x' sebelum ekstensi file
                });
            }
        }
    });
});



</script>
 </body>
</html>
