<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;
use Barryvdh\DomPDF\PDF;

class PpdbController extends Controller
{
    public function index()
    {
        return view('ppdb.ppdb');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string',
            'nik' => 'required|string',
            'no_kk' => 'required|string',
            'nisn' => 'required|string',
            'ttl' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'asal_sekolah' => 'required|string',
            'alamat' => 'required|string',
            'nama_ayah' => 'required|string',
            'nik_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'pendidikan_ayah' => 'required|string',
            'no_telp_ayah' => 'required|string',
            'penghasilan_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'nik_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'pendidikan_ibu' => 'required|string',
            'no_telp_ibu' => 'required|string',
            'penghasilan_ibu' => 'required|string',
            'nama_wali' => 'nullable|string',
            'no_telp_wali' => 'nullable|string',
            'alamat_wali' => 'nullable|string',
            'foto_kk' => 'required|image',
            'foto_ktp' => 'required|image',
            'foto_akta' => 'required|image',
            'foto_raport' => 'required|image',
            'foto_ijazah' => 'nullable|image',
            'foto_sertifikat' => 'nullable|image'
        ]);

        foreach (['foto_kk', 'foto_ktp', 'foto_akta', 'foto_raport', 'foto_ijazah', 'foto_sertifikat'] as $file) {
            if ($request->hasFile($file)) {
                $validatedData[$file] = $request->file($file)->store('uploads', 'public');
            }
        }

        $validatedData['status'] = 'pending';

        $pendaftar = Ppdb::create($validatedData);

        session(['pendaftar_id' => $pendaftar->id]);

        return redirect()->route('ppdb.ppdb')->with('success', 'Pendaftaran berhasil! Silakan cetak formulir.');
    }

    // ======================= CETAK USER DAN ADMIN  =======================

    // Cetak oleh USER
    public function cetakUser(PDF $pdf)
{
    $pendaftar_id = session('pendaftar_id');

    if (!$pendaftar_id) {
        abort(403, 'Anda tidak memiliki akses untuk mencetak');
    }

    $pendaftar = Ppdb::find($pendaftar_id);

    if (!$pendaftar) {
        abort(404, 'Data pendaftaran tidak ditemukan');
    }

    $pdf = $pdf->loadView('ppdb.cetak', compact('pendaftar'));
    return $pdf->stream('formulir-pendaftaran.pdf');
}


    // Cetak oleh ADMIN
    public function cetakAdmin($id, PDF $pdf)
{
    $pendaftar = Ppdb::findOrFail($id);

    $pdf = $pdf->loadView('admin.ppdb.cetak', compact('pendaftar'));
    return $pdf->stream('formulir-pendaftaran.pdf');
}

    // ======================= ADMIN PANEL =======================

    public function adminIndex()
    {
        $pendaftar = Ppdb::all();
        return view('admin.ppdb.index', compact('pendaftar'));
    }

    public function verify($id)
    {
        $pendaftar = Ppdb::findOrFail($id);
        $pendaftar->status_verifikasi = $pendaftar->status_verifikasi == 'verified' ? 'pending' : 'verified';
        $pendaftar->save();

        return redirect()->route('admin.ppdb.index')->with('success', 'Status berhasil diubah menjadi ' . ucfirst($pendaftar->status_verifikasi) . '!');
    }

    public function show($id)
    {
        $pendaftar = Ppdb::findOrFail($id);
        return view('admin.ppdb.detail', compact('pendaftar'));
    }
}
