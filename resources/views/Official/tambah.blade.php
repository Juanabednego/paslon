@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Tambah Official Details</h1>

    <a href="{{ route('admin.official') }}" class="btn btn-secondary mb-3">Kembali</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.official.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="gambar">Upload Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="url" class="form-control" id="twitter" name="twitter">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="url" class="form-control" id="facebook" name="facebook">
        </div>
        <div class="form-group">
            <label for="youtube">YouTube</label>
            <input type="url" class="form-control" id="youtube" name="youtube">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="url" class="form-control" id="instagram" name="instagram">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="url" class="form-control" id="linkedin" name="linkedin">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
</div>
@endsection
