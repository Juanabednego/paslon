@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Edit Official Details</h1>

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

    <form action="{{ route('admin.official.update', $official->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="gambar">Upload Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <img src="{{ asset('images/' . $official->gambar) }}" class="img-fluid mt-3" width="30%" alt="Official Image">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $official->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required value="{{ $official->nomor_telepon }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ $official->email }}">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="url" class="form-control" id="twitter" name="twitter" value="{{ $official->twitter }}">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="url" class="form-control" id="facebook" name="facebook" value="{{ $official->facebook }}">
        </div>
        <div class="form-group">
            <label for="youtube">YouTube</label>
            <input type="url" class="form-control" id="youtube" name="youtube" value="{{ $official->youtube }}">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $official->instagram }}">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ $official->linkedin }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
