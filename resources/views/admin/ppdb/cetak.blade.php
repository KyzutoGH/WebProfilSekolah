<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            margin: 25px;
        }
        h2, h4 {
            text-align: center;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
            font-size: 10.5px;
        }
        th, td {
            border: 1px solid black;
            padding: 6px 7px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .ttd {
            text-align: right;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <h2>Data Lengkap Calon Peserta Didik SMP PGRI Bakung</h2>

    <h4>Informasi Calon Peserta Didik</h4>
    <table>
        <tr><th>Nama Lengkap</th><td>{{ $pendaftar->nama_lengkap }}</td></tr>
        <tr><th>Email</th><td>{{ $pendaftar->email }}</td></tr>
        <tr><th>NIK</th><td>{{ $pendaftar->nik }}</td></tr>
        <tr><th>No. KK</th><td>{{ $pendaftar->no_kk }}</td></tr>
        <tr><th>NISN</th><td>{{ $pendaftar->nisn }}</td></tr>
        <tr><th>Tempat, Tanggal Lahir</th><td>{{ $pendaftar->ttl }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $pendaftar->jenis_kelamin }}</td></tr>
        <tr><th>Agama</th><td>{{ $pendaftar->agama }}</td></tr>
        <tr><th>Asal Sekolah</th><td>{{ $pendaftar->asal_sekolah }}</td></tr>
        <tr><th>Alamat</th><td>{{ $pendaftar->alamat }}</td></tr>
    </table>

    <h4>Informasi Orang Tua</h4>
    <table>
        <tr><th>Nama Ayah</th><td>{{ $pendaftar->nama_ayah }}</td></tr>
        <tr><th>NIK Ayah</th><td>{{ $pendaftar->nik_ayah }}</td></tr>
        <tr><th>Pekerjaan Ayah</th><td>{{ $pendaftar->pekerjaan_ayah }}</td></tr>
        <tr><th>Pendidikan Ayah</th><td>{{ $pendaftar->pendidikan_ayah }}</td></tr>
        <tr><th>No. Telp Ayah</th><td>{{ $pendaftar->no_telp_ayah }}</td></tr>
        <tr><th>Penghasilan Ayah</th><td>{{ $pendaftar->penghasilan_ayah }}</td></tr>
        <tr><th>Nama Ibu</th><td>{{ $pendaftar->nama_ibu }}</td></tr>
        <tr><th>NIK Ibu</th><td>{{ $pendaftar->nik_ibu }}</td></tr>
        <tr><th>Pekerjaan Ibu</th><td>{{ $pendaftar->pekerjaan_ibu }}</td></tr>
        <tr><th>Pendidikan Ibu</th><td>{{ $pendaftar->pendidikan_ibu }}</td></tr>
        <tr><th>No. Telp Ibu</th><td>{{ $pendaftar->no_telp_ibu }}</td></tr>
        <tr><th>Penghasilan Ibu</th><td>{{ $pendaftar->penghasilan_ibu }}</td></tr>
    </table>

    <h4>Informasi Wali</h4>
    <table>
        <tr><th>Nama Wali</th><td>{{ $pendaftar->nama_wali ?? 'Tidak diisi' }}</td></tr>
        <tr><th>No. Telp Wali</th><td>{{ $pendaftar->no_telp_wali ?? 'Tidak diisi' }}</td></tr>
        <tr><th>Alamat Wali</th><td>{{ $pendaftar->alamat_wali ?? 'Tidak diisi' }}</td></tr>
    </table>

    <div class="ttd">
        <br>
        <br>
        <br>
        <br>
        <p>TTD,</p><br><br><br>
        <p>Panitia PPDB</p>
    </div>
</body>
</html>
