@extends ('layouts.layouts')

@section ('content')
<section class="py-5" style="margin-top: 100px"> 
    <div class="container col-xxl-8">

        <h2 class="fw-bold text-center mb-4">📝 Berita Kegiatan SMP Pgri Bakung</h2>

        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus fa-sm"></i> Buat Artikel
        </a>

        <div class="table-responsive py-3">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 20%">Image</th>
                        <th style="width: 35%">Judul</th>
                        <th style="width: 20%">Tanggal Pelaksanaan</th> <!-- Tambahan kolom -->
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($artikels as $artikel)     
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-thumbnail" width="150" alt="Artikel">
                        </td>
                        <td>{{ $artikel->judul }}</td>
                        <td>{{ \Carbon\Carbon::parse($artikel->tanggal_pelaksanaan)->translatedFormat('d F Y') }}</td> <!-- Format tanggal -->
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('blog.edit', $artikel->id) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $artikel->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left fa-sm"></i> Kembali ke Dashboard
        </a>

    </div>
</section>
@endsection
