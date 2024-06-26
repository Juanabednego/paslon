@extends('layouts.admin')

@section('content')
<div class="main-content">
    <div class="container mt-5">
        <h3>Edit Misi</h3>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('misi.update', $misi->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea class="form-control" id="misi" name="misi" rows="4">{{ $misi->misi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
