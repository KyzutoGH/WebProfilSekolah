@extends('layouts.layouts')

@section('content')
<h1 class="text-center my-4">Profil Sekolah</h1>

<section id="detail-ppdb">
    <div class="container py-5" style="margin-top: 80px">
        <div class="header-detail-ppdb text-center mb-5">
            <h2 class="fw-bold">Data Lengkap Calon Peserta Didik SMP PGRI Bakung</h2>
        </div>

        <div class="card shadow-lg p-4">
            <h4 class="text-center mb-4">Informasi Calon Peserta Didik</h4>
            <table class="table table-bordered">
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $pendaftar->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $pendaftar->email }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $pendaftar->nik }}</td>
                </tr>
                <tr>
                    <th>No. KK</th>
                    <td>{{ $pendaftar->no_kk }}</td>
                </tr>
                <tr>
                    <th>NISN</th>
                    <td>{{ $pendaftar->nisn }}</td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir</th>
                    <td>{{ $pendaftar->ttl }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $pendaftar->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{ $pendaftar->agama }}</td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <td>{{ $pendaftar->asal_sekolah}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pendaftar->alamat }}</td>
                </tr>
            </table>

            <h4 class="text-center my-4">Informasi Orang Tua</h4>
            <table class="table table-bordered">
                <tr>
                    <th>Nama Ayah</th>
                    <td>{{ $pendaftar->nama_ayah }}</td>
                </tr>
                <tr>
                    <th>NIK Ayah</th>
                    <td>{{ $pendaftar->nik_ayah }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ayah</th>
                    <td>{{ $pendaftar->pekerjaan_ayah }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ayah</th>
                    <td>{{ $pendaftar->pendidikan_ayah }}</td>
                </tr>
                <tr>
                    <th>No. Telp Ayah</th>
                    <td>{{ $pendaftar->no_telp_ayah }}</td>
                </tr>
                <tr>
                    <th>Penghasilan Ayah</th>
                    <td>{{ $pendaftar->penghasilan_ayah }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>{{ $pendaftar->nama_ibu }}</td>
                </tr>
                <tr>
                    <th>NIK Ibu</th>
                    <td>{{ $pendaftar->nik_ibu }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ibu</th>
                    <td>{{ $pendaftar->pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ibu</th>
                    <td>{{ $pendaftar->pendidikan_ibu }}</td>
                </tr>
                <tr>
                    <th>No. Telp Ibu</th>
                    <td>{{ $pendaftar->no_telp_ibu }}</td>
                </tr>
                <tr>
                    <th>Penghasilan Ibu</th>
                    <td>{{ $pendaftar->penghasilan_ibu }}</td>
                </tr>
            </table>

            <h4 class="text-center my-4">Informasi Wali</h4>
            <table class="table table-bordered">
                <tr>
                    <th>Nama Wali</th>
                    <td>{{ $pendaftar->nama_wali ?? 'Tidak diisi' }}</td>
                </tr>
                <tr>
                    <th>No. Telp Wali</th>
                    <td>{{ $pendaftar->no_telp_wali ?? 'Tidak diisi' }}</td>
                </tr>
                <tr>
                    <th>Alamat Wali</th>
                    <td>{{ $pendaftar->alamat_wali ?? 'Tidak diisi' }}</td>
                </tr>
            </table>

            <h5 class="text-center my-4">Dokumen Yang Di Upload</h5>
            <div class="row">
                @foreach(['foto_kk' => 'Kartu Keluarga', 'foto_ktp' => 'KTP', 'foto_akta' => 'Akta Kelahiran', 'foto_raport' => 'Raport', 'foto_ijazah' => 'Ijazah', 'foto_sertifikat' => 'Sertifikat'] as $field => $label)
                    <div class="col-md-3 text-center">
                        <p class="fw-bold">{{ $label }}</p>
                        @if($pendaftar->$field)
                            <a href="{{ asset('storage/' . $pendaftar->$field) }}" class="image-link">
                                <img src="{{ asset('storage/' . $pendaftar->$field) }}" class="img-thumbnail foto-kegiatan-img" alt="{{ $label }}" width="150">
                            </a>
                        @else
                            <p class="text-muted">Tidak diunggah</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container text-center mt-4" style="margin-top: -20px;">
            <a href="{{ route('admin.ppdb.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('ppdb.cetak.admin', $pendaftar->id) }}" class="btn btn-primary" target="_blank">
                <i class="fas fa-print"></i> Cetak
            </a>
        </div>
        
</section>
@endsection
