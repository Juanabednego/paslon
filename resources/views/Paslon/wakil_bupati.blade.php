@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Halaman Profil Calon Wakil Bupati</h1>
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('admin.paslon.edit-wakil-bupati') }}" class="btn btn-warning">Edit Profil</a>
        <div>
            <a href="{{route('admin.paslon.karir', $wakil_bupati->id)}}" class="btn btn-primary">Karir</a>
            <a href="{{route('admin.paslon.edukasi', $wakil_bupati->id)}}" class="btn btn-primary">Edukasi</a>
            <a href="{{route('admin.paslon.organisasi', $wakil_bupati->id)}}" class="btn btn-primary">Organisasi</a>
        </div>
    </div>

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

    <div class="card mb-4 shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/images/' . $wakil_bupati->foto) }}" width="80%" class="img-fluid rounded-start" alt="{{ $wakil_bupati->nama }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $wakil_bupati->nama }}</h3>
                    <p class="card-text"><strong>Deskripsi:</strong> {{ $wakil_bupati->deskripsi }}</p>
                    <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $wakil_bupati->tanggal_lahir }}</p>
                    <p class="card-text"><strong>Tempat Lahir:</strong> {{ $wakil_bupati->tempat_lahir }}</p>
                    <p class="card-text"><strong>Nomor HP:</strong> {{ $wakil_bupati->nomor_hp }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $wakil_bupati->alamat }}</p>
                    <p class="card-text"><strong>Degree:</strong> {{ $wakil_bupati->degree }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $wakil_bupati->email }}</p>
                    <p class="card-text"><strong>Agama:</strong> {{ $wakil_bupati->agama }}</p>
                    <div class="d-flex">
                        <a href="{{ $wakil_bupati->facebook }}" class="btn btn-primary me-2" target="_blank"><i class="bi bi-facebook"></i> Facebook</a>
                        <a href="{{ $wakil_bupati->twitter }}" class="btn btn-info me-2" target="_blank"><i class="bi bi-twitter"></i> Twitter</a>
                        <a href="{{ $wakil_bupati->instagram }}" class="btn btn-danger me-2" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
                        <a href="{{ $wakil_bupati->skype }}" class="btn btn-secondary me-2" target="_blank"><i class="bi bi-skype"></i> Skype</a>
                        <a href="{{ $wakil_bupati->linkedin }}" class="btn btn-dark" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
