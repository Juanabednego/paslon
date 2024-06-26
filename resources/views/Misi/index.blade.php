@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Misi Page Admin</h1>
    <br><br>
    <a href="{{ route('admin.tambah-misi') }}" class="btn btn-success">Tambah misi</a>
    <br><br>

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
                    <th scope="col">Isi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($misis as $index => $misi)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $misi->isi }}</td>
                        <td>
                            <a href="{{ route('admin.edit-misi', $misi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.delete-misi', $misi->id) }}" method="GET" class="d-inline-block delete-form">
                                @csrf
                                <button type="button" class="btn btn-danger btn-sm delete-btn">Delete</button>
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
        const deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(form => {
            form.querySelector('.delete-btn').addEventListener('click', function (event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Apakah kamu yakin untuk menghapus misi ini?',
                    text: "Tindakan ini tidak dapat dipulihkan lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
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
