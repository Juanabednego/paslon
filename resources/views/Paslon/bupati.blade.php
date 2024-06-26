@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Halaman Profil Calon Bupati</h1>
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('admin.paslon.edit-bupati') }}" class="btn btn-warning">Edit Profil</a>
        <div>
            <a href="{{route('admin.paslon.karir', $bupati->id)}}" class="btn btn-primary">Karir</a>
            <a href="{{route('admin.paslon.edukasi', $bupati->id)}}" class="btn btn-primary">Edukasi</a>
            <a href="{{route('admin.paslon.organisasi', $bupati->id)}}" class="btn btn-primary">Organisasi</a>
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
                <img src="{{ asset('storage/images/' . $bupati->foto) }}" width="80%" class="img-fluid rounded-start" alt="{{ $bupati->nama }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $bupati->nama }}</h3>
                    <p class="card-text"><strong>Deskripsi:</strong> {{ $bupati->deskripsi }}</p>
                    <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $bupati->tanggal_lahir }}</p>
                    <p class="card-text"><strong>Tempat Lahir:</strong> {{ $bupati->tempat_lahir }}</p>
                    <p class="card-text"><strong>Nomor HP:</strong> {{ $bupati->nomor_hp }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $bupati->alamat }}</p>
                    <p class="card-text"><strong>Degree:</strong> {{ $bupati->degree }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $bupati->email }}</p>
                    <p class="card-text"><strong>Agama:</strong> {{ $bupati->agama }}</p>
                    <div class="d-flex">
                        <a href="{{ $bupati->facebook }}" class="btn btn-primary me-2" target="_blank"><i class="bi bi-facebook"></i> Facebook</a>
                        <a href="{{ $bupati->twitter }}" class="btn btn-info me-2" target="_blank"><i class="bi bi-twitter"></i> Twitter</a>
                        <a href="{{ $bupati->instagram }}" class="btn btn-danger me-2" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
                        <a href="{{ $bupati->skype }}" class="btn btn-secondary me-2" target="_blank"><i class="bi bi-skype"></i> Skype</a>
                        <a href="{{ $bupati->linkedin }}" class="btn btn-dark" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
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
