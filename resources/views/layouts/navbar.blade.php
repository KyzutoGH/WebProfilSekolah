{{-- Navbar --}}
<nav class="navbar navbar-expand-lg fixed-top py-2 {{ Request::is('/') ? 'navbar-dark' : 'bg-white shadow' }}">
    <div class="container">
       <a class="navbar-brand ms-3" href="{{ url('/') }}">
           <img src="{{ asset('assets/icons/logo PGRI.png') }}" height="90" width="120" alt="Logo PGRI">
       </a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
        
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                   <a class="nav-link nav-hover {{ Request::is('/') ? 'text-white' : 'text-dark' }}" href="/">Beranda</a>
               </li>
               <li class="nav-item"> 
                   <a class="nav-link nav-hover {{ Request::is('profil') ? 'text-dark' : (Request::is('/') ? 'text-white' : 'text-dark') }}" href="/profil">Profil</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link nav-hover {{ Request::is('berita') ? 'text-dark' : (Request::is('/') ? 'text-white' : 'text-dark') }}" href="/berita">Berita</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link nav-hover {{ Request::is('pendaftaran') ? 'text-dark' : (Request::is('/') ? 'text-white' : 'text-dark') }}" href="/ppdb">Pendaftaran</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link nav-hover {{ Request::is('galeri') ? 'text-dark' : (Request::is('/') ? 'text-white' : 'text-dark') }}" href="/foto">Galeri</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link nav-hover {{ Request::is('contact') ? 'text-dark' : (Request::is('/') ? 'text-white' : 'text-dark') }}" href="/contact">Kontak</a>
               </li>
           </ul>
           <div class="d-flex">
               @auth
                   <form action="/logout" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-dark">Logout</button>
                   </form>
               @else
                   <button class="btn btn-danger" onclick="window.location.href='{{ route('login') }}'">Login</button>
               @endauth
           </div>
       </div>
   </div>
</nav>

<style>
.nav-hover {
    position: relative;
    display: inline-block;
    padding: 5px 10px;
    transition: color 0.3s ease-in-out;
}

.nav-hover::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -2px;
    width: 0;
    height: 3px;
    background-color: #226b3a;
    transition: all 0.4s ease-in-out;
    transform: translateX(-50%);
}

.nav-hover:hover {
    color:#c9db23 !important;
}

.nav-hover:hover::after {
    width: 100%;
}

</style>
{{-- Navbar --}}
