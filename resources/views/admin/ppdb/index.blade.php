@extends('layouts.layouts')

@section('content')
<h1 class="text-center my-4">Profil Sekolah</h1>

<section id="ppdb-admin">
    <div class="container py-5" style="margin-top: 50px">
        <div class="header-ppdb-admin text-center mb-4">
            <h2 class="fw-bold text-center mb-4">📋 DATA PPDB SMP PGRI BAKUNG</h2>
        </div>

        {{-- Alert Pesan Sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 25%">Nama Lengkap</th>
                        <th style="width: 25%">Email</th>
                        <th style="width: 20%">Status</th>
                        <th style="width: 25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftar as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                {{-- Form untuk Verifikasi --}}
                                <form id="verify-form-{{ $data->id }}" action="{{ route('admin.ppdb.verify', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="button" 
                                        class="btn btn-sm {{ $data->status_verifikasi == 'verified' ? 'btn-success' : 'btn-warning' }}"
                                        onclick="confirmVerification({{ $data->id }}, '{{ $data->status_verifikasi }}')">
                                        {{ ucfirst($data->status_verifikasi) }}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('admin.ppdb.show', $data->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary ml-2">
            <i class="fas fa-arrow-left fa-sm"></i> Kembali ke Dashboard
        </a>
    </div>
</section>

{{-- Tambahkan SweetAlert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmVerification(id, status) {
    let newStatus = status === 'verified' ? 'Pending' : 'Verified';
    
    Swal.fire({
        title: "Konfirmasi Perubahan",
        text: `Apakah Anda yakin ingin mengubah status menjadi ${newStatus}?`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Ubah!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`verify-form-${id}`).submit();
        }
    });
}
</script>

@endsection  
