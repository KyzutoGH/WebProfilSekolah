<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('nisn');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('asal_sekolah');
            $table->text('alamat');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('no_telp_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('no_telp_ibu');
            $table->string('penghasilan_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('foto_kk');
            $table->string('foto_ktp');
            $table->string('foto_akta');
            $table->string('foto_raport');
            $table->string('foto_ijazah')->nullable();
            $table->string('foto_sertifikat')->nullable();
            $table->string('status_verifikasi')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ppdbs');
    }
};
