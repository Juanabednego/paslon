@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Edit Misi Page Admin</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.update-misi', $misi->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3" required>{{ old('isi', $misi->isi) }}</textarea>
                </div>
                <div class="d-flex justify-content">
                    <a href="{{ route('admin.misi') }}" class="btn btn-danger me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update Misi</button>
                </div>
            </form>
        </div>
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
@endsection
