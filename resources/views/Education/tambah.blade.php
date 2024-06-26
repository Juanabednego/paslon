@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Tambah Education Paslon</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.edukasi.store', $paslon_id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <input type="text" class="form-control @error('program_studi') is-invalid @enderror" id="program_studi" name="program_studi" value="{{ old('program_studi') }}" required>
                    @error('program_studi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tahun_mulai" class="form-label">Tahun Mulai</label>
                    <input type="number" class="form-control @error('tahun_mulai') is-invalid @enderror" id="tahun_mulai" name="tahun_mulai" value="{{ old('tahun_mulai') }}" required>
                    @error('tahun_mulai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tahun_selesai" class="form-label">Tahun Selesai</label>
                    <input type="number" class="form-control @error('tahun_selesai') is-invalid @enderror" id="tahun_selesai" name="tahun_selesai" value="{{ old('tahun_selesai') }}" required>
                    @error('tahun_selesai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kampus" class="form-label">Kampus</label>
                    <input type="text" class="form-control @error('kampus') is-invalid @enderror" id="kampus" name="kampus" value="{{ old('kampus') }}" required>
                    @error('kampus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.paslon.edukasi', $paslon_id) }}" class="btn btn-secondary">Kembali</a>
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
