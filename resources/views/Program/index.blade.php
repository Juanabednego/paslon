@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Program Page Admin</h1>
    <a href="{{ route('admin.tambah-program') }}" class="btn btn-success mb-4">Tambah Program</a>

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

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $index => $program)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $program->judul }}</td>
                        <td>{{ $program->keterangan }}</td>
                        <td><img src="{{ asset('storage/images/' . $program->gambar) }}" alt="{{ $program->judul }}" style="width: 100px;"></td>
                        <td>
                            <a href="{{ route('admin.edit-program', $program->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.delete-program', $program->id) }}" method="GET" class="d-inline-block delete-form">
                                @csrf
                                <button type="button" class="btn btn-danger btn-sm delete-btn">Hapus</button>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.closest('.delete-form').submit();
                    }
                });
            });
        });
    });
</script>
@endsection
