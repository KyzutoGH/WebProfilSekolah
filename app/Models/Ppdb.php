<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdbs'; // Nama tabel dalam database

    protected $fillable = [
        'email', 'nama_lengkap', 'nik', 'no_kk', 'nisn', 'ttl', 'jenis_kelamin',
        'agama', 'asal_sekolah', 'alamat', 'nama_ayah', 'nik_ayah', 'pekerjaan_ayah', 'pendidikan_ayah',
        'no_telp_ayah', 'penghasilan_ayah', 'nama_ibu', 'nik_ibu', 'pekerjaan_ibu',
        'pendidikan_ibu', 'no_telp_ibu', 'penghasilan_ibu', 'nama_wali', 'no_telp_wali',
        'alamat_wali', 'foto_kk', 'foto_ktp', 'foto_akta', 'foto_raport',
        'foto_ijazah', 'foto_sertifikat', 'status_verifikasi'
    ];

    // Mutator untuk default status
    public function getStatusVerifikasiAttribute($value)
    {
        return ucfirst($value); // "Pending" atau "Verified"
    }

    // Setter untuk status verifikasi
    public function setStatusVerifikasiAttribute($value)
    {
        $this->attributes['status_verifikasi'] = strtolower($value);
    }
}
