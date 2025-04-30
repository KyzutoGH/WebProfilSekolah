@extends('layouts.layouts')

@section('content')
<h1 class="text-center my-4">KONTAK DAN SARAN</h1>

<section id="contact">
    <div class="container py-5" style="margin-top: 50px">
        <div class="header-contact text-center mb-4">
            <h2 class="fw-bold">📩 DAFTAR PESAN DARI PENGGUNA 💬</h2>

        </div>

        {{-- Alert Pesan Sukses --}}
        @if (session('success'))
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
                        <th style="width: 20%">Nama</th>
                        <th style="width: 25%">Email</th>
                        <th style="width: 30%">Pesan</th>
                        <th style="width: 10%">Tanggal</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $key => $contact)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <form id="delete-form-{{ $contact->id }}" action="{{ route('admin.contacts.delete', $contact->id) }}" method="POST" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            
                           <!-- Tombol Hapus -->
                           <div class="d-flex justify-content-center gap-2">
                            <!-- Tombol Hapus -->
                            <button onclick="confirmDelete(event, 'delete-form-{{ $contact->id }}')" 
                                class="btn btn-danger btn-sm d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px; padding: 0;">
                                <i class="fas fa-trash"></i>
                            </button>
                        
                            <!-- Tombol Balas -->
                            <button type="button" 
                                class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
                                data-bs-toggle="modal" 
                                data-bs-target="#replyModal{{ $contact->id }}"
                                style="width: 40px; height: 40px; padding: 0;">
                                <i class="fas fa-reply"></i>
                            </button>
                        </div>
                        

                        
                            <!-- Modal Balas Pesan -->
                            <div class="modal fade" id="replyModal{{ $contact->id }}" tabindex="-1" aria-labelledby="replyModalLabel{{ $contact->id }}" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <form action="{{ route('admin.contacts.reply', $contact->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="replyModalLabel{{ $contact->id }}">Balas Pesan ke {{ $contact->email }}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <label for="reply_message" class="form-label">Isi Balasan</label>
                                        <textarea class="form-control" name="reply_message" id="reply_message" rows="5" required></textarea>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success">Kirim Balasan</button>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
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


<script>
    function confirmDelete(event, formId) {
        event.preventDefault(); // Mencegah form submit langsung

        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Pesan ini akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(formId).submit(); // Submit form jika dikonfirmasi
            }
        });
    }
</script>

