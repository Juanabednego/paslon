@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Education Paslon Page Admin</h1>
    
    <!-- Tombol Tambah -->
    @if ($paslon_id == 1)
    <a href="{{route('admin.paslon.bupati')}}" class="btn btn-secondary mb-4">Kembali Ke Halaman Profil</a>
    @elseif ($paslon_id == 2)
    <a href="{{route('admin.paslon.wakil-bupati')}}" class="btn btn-secondary mb-4">Kembali Ke Halaman Profil</a>
    @endif    <a href="{{route('admin.edukasi.tambah', $paslon_id)}}" class="btn btn-primary mb-4">Tambah Edukasi</a>
    
    <!-- Tabel Pendidikan -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Tahun Mulai</th>
                    <th scope="col">Tahun Selesai</th>
                    <th scope="col">Kampus</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pe as $index => $edu)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $edu->program_studi }}</td>
                        <td>{{ $edu->tahun_mulai }}</td>
                        <td>{{ $edu->tahun_selesai }}</td>
                        <td>{{ $edu->kampus }}</td>
                        <td>{{ $edu->keterangan }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('admin.edukasi.edit', $edu->id)}}" class="btn btn-warning btn-sm me-1">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $edu->id }}">Hapus</button>
                            </div>
                            <form id="delete-form-{{ $edu->id }}" action="{{ route('admin.edukasi.delete', $edu->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const educationId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak akan bisa mengembalikan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${educationId}`).submit();
                    }
                });
            });
        });
    });
</script>
@endsection
