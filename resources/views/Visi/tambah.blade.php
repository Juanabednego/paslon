@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Tambah Visi Page Admin</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.store-visi') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3" required></textarea>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary">Tambah Visi</button>
                    <a href="{{ route('admin.visi') }}" class="btn btn-danger ms-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
