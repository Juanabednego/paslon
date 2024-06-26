@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Organisasi Page Admin</h1>
    
    <!-- Tombol Tambah -->
    @if ($paslon_id == 1)
    <a href="{{route('admin.paslon.bupati')}}" class="btn btn-secondary mb-4">Kembali Ke Halaman Profil</a>
    @elseif ($paslon_id == 2)
    <a href="{{route('admin.paslon.wakil-bupati')}}" class="btn btn-secondary mb-4">Kembali Ke Halaman Profil</a>
    @endif    <a href="{{ route('admin.organisasi.tambah', $paslon_id) }}" class="btn btn-primary mb-4">Tambah Organisasi</a>
    
    <!-- Tabel Organisasi -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Organisasi</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Tahun Mulai</th>
                    <th scope="col">Tahun Sampai</th>
                    <th scope="col">Lainnya</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($op as $index => $org)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $org->nama }}</td>
                        <td>{{ $org->lokasi }}</td>
                        <td>{{ $org->posisi }}</td>
                        <td>{{ $org->tahun_mulai }}</td>
                        <td>{{ $org->tahun_sampai }}</td>
                        <td>
                            <a href="{{route('admin.paslon.aktivitas', $org->id)}}" class="btn btn-info">Aktivitas/Pengalaman</a>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.organisasi.edit', $org->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                <form action="{{ route('admin.organisasi.delete', $org->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm delete-btn">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        });
    </script>
@endif
@endsection
