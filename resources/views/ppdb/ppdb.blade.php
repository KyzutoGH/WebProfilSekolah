@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px">

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('ppdb.cetak.user', session('pendaftar_id')) }}" class="btn btn-primary" target="_blank">
            <i class="fas fa-print"></i> Cetak Formulir
        </a>
    </div>
@endif

    <div class="text-center mb-5">
        <h1 class="fw-bold">FORM PENDAFTARAN SISWA BARU</h1>
        <h3>SMP PGRI BAKUNG</h3>
    </div>
    
    <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="tab-content">
            <div class="tab-pane fade show active" id="step1">
                <h4>Data Calon Peserta Didik</h4>
                <div class="mb-3">
                    <label class="form-label">Email Aktif *</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap *</label>
                    <input type="text" class="form-control" name="nama_lengkap" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK *</label>
                    <input type="text" class="form-control" name="nik" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">No KK *</label>
                    <input type="text" class="form-control" name="no_kk" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">NISN *</label>
                    <input type="text" class="form-control" name="nisn" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat, Tanggal Lahir *</label>
                    <input type="text" class="form-control" name="ttl" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin *</label>
                    <select class="form-control" name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama *</label>
                    <input type="text" class="form-control" name="agama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Sekolah *</label>
                    <input type="text" class="form-control" name="asal_sekolah" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Alamat (Lengkap) *</label>
                    <textarea class="form-control" name="alamat" required></textarea>
                </div>
                <div class="text-end">   
                    <button type="button" class="btn btn-primary next-step">Lanjut ></button>
                </div>
            </div>

            
            <div class="tab-pane fade" id="step2">
                <h4>Data Ayah Kandung</h4>
                <div class="mb-3">
                    <label class="form-label">Nama Ayah *</label>
                    <input type="text" class="form-control" name="nama_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK Ayah *</label>
                    <input type="text" class="form-control" name="nik_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan *</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pendidikan Terakhir *</label>
                    <input type="text" class="form-control" name="pendidikan_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telp *</label>
                    <input type="text" class="form-control" name="no_telp_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penghasilan Perbulan *</label>
                    <input type="text" class="form-control" name="penghasilan_ayah" required>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary prev-step">< Kembali</button>
                    <button type="button" class="btn btn-primary next-step">Lanjut ></button>
                </div>

            </div>
            
            <div class="tab-pane fade" id="step3">
                <h4>Data Ibu Kandung</h4>
                <div class="mb-3">
                    <label class="form-label">Nama Ibu *</label>
                    <input type="text" class="form-control" name="nama_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK Ibu *</label>
                    <input type="text" class="form-control" name="nik_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan *</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pendidikan Terakhir *</label>
                    <input type="text" class="form-control" name="pendidikan_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telp *</label>
                    <input type="text" class="form-control" name="no_telp_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penghasilan Perbulan *</label>
                    <input type="text" class="form-control" name="penghasilan_ibu" required>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary prev-step">< Kembali</button>
                    <button type="button" class="btn btn-primary next-step">Lanjut ></button>
                </div>
            </div>

            <div class="tab-pane fade" id="step3">
                <h4>Data Wali</h4>
                <div class="mb-3">
                    <label class="form-label">Nama Wali</label>
                    <input type="text" class="form-control" name="nama_wali">
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telp</label>
                    <input type="text" class="form-control" name="no_telp_wali">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat_wali">
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary prev-step">< Kembali</button>
                    <button type="button" class="btn btn-primary next-step">Lanjut ></button>
                </div>
            </div>
            
            <div class="tab-pane fade" id="step4">
                <h4>Dokumentasi Data</h4>
                <div class="mb-3">
                    <label class="form-label">Foto KK *</label>
                    <input type="file" class="form-control" name="foto_kk" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto KTP Orang Tua (Ayah/Ibu) *</label>
                    <input type="file" class="form-control" name="foto_ktp" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Akta Calon Peserta Didik *</label>
                    <input type="file" class="form-control" name="foto_akta" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Raport Kelas 6 Semester 1 *</label>
                    <input type="file" class="form-control" name="foto_raport" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Ijazah (Opsional)</label>
                    <input type="file" class="form-control" name="foto_ijazah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sertifikat (Opsional)</label>
                    <input type="file" class="form-control" name="foto_sertifikat">
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary prev-step">< Kembali</button>
                    <button type="submit" class="btn btn-success">Kirim Pendaftaran</button>
                </div>

            </div>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentTab = 0;
    const tabs = document.querySelectorAll(".tab-pane");
    const nextButtons = document.querySelectorAll(".next-step");
    const prevButtons = document.querySelectorAll(".prev-step");

    function showTab(n) {
        tabs.forEach(tab => tab.classList.remove("show", "active"));
        tabs[n].classList.add("show", "active");
    }

    nextButtons.forEach((btn, index) => {
        btn.addEventListener("click", function () {
            if (index < tabs.length - 1) {
                currentTab++;
                showTab(currentTab);
            }
        });
    });

    prevButtons.forEach((btn, index) => {
        btn.addEventListener("click", function () {
            if (currentTab > 0) {
                currentTab--;
                showTab(currentTab);
            }
        });
    });

    showTab(currentTab);
});
</script>
@endsection
