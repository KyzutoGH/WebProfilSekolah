@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h2 class="fw-bold text-center mb-4">📸 Foto Kegiatan SMP PGRI Bakung</h2>
        
        <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModal">
            <i class="fas fa-upload fa-sm"></i> Upload Photo
        </a>

        {{-- Pesan sukses --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Informasi:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Menampilkan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>  
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 25%">Image</th>
                        <th style="width: 40%">Kegiatan</th>
                        <th style="width: 15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($photos as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset('storage/photo/' . $item->image) }}" class="img-thumbnail" width="150" alt="Foto Kegiatan">
                        </td>
                        <td>{{ $item->judul }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                {{-- Tombol Edit --}}
                                <a href="#" class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>

                                {{-- Form Hapus --}}
                                <form action="{{ route('photo.destroy', $item->id) }}" method="POST" class="delete-form d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">🖼 Edit Foto Kegiatan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('photo.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_photo" value="{{ $item->id }}">

                                        <div class="mb-3 text-center">
                                            <label for="photo" class="form-label fw-bold">Foto Saat Ini</label>
                                            <div>
                                                <img src="{{ asset('storage/photo/' . $item->image) }}" class="img-thumbnail" width="200" alt="Foto Kegiatan">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="photo" class="form-label">Pilih Photo Baru</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Nama Kegiatan</label>
                                            <input type="text" name="judul" class="form-control" value="{{ $item->judul }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left fa-sm"></i> Kembali ke Dashboard
        </a>
    </div>
</section>

<!-- Modal Upload -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">📤 Upload Foto Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                        <label for="photo" class="form-label">Pilih Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Kegiatan</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
