@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Aktivitas/Pengalaman Anda di Organisasi {{ $norg }}</h1>
    


    <!-- Tombol Tambah -->
    <a href="{{route('admin.paslon.organisasi', $paslon_id)}}" class="btn btn-secondary mb-3">Kembali Ke Halaman Organisasi</a>
    <a href="{{ route('admin.aktivitas.tambah', $organisasi_id) }}" class="btn btn-primary mb-3">Tambah Aktivitas</a>
    
    <!-- Tabel Aktivitas/Pengalaman -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aktivitas as $index => $act)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $act->keterangan }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.aktivitas.edit', $act->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>

                                <form action="{{ route('admin.aktivitas.delete', $act->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn" data-id="{{ $act->id }}">Hapus</button>
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
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const aktivitasId = this.querySelector('.delete-btn').getAttribute('data-id');

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
                        this.submit(); // Submit form
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
