@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Official Details</h1>

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

    <div class="card mb-4">
        <div class="card-body">
            @if($official->isEmpty())
                <div class="text-center">
                    <p>No official details found.</p>
                    <a href="{{ route('admin.official.create') }}" class="btn btn-success">Tambah Official</a>
                </div>
            @else
                @php $official = $official->first(); @endphp
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/' . $official->gambar) }}" class="img-fluid" alt="Official Image">
                    </div>
                    <div class="col-md-8">
                        <h5>Alamat: {{ $official->alamat }}</h5>
                        <h5>Nomor Telepon: {{ $official->nomor_telepon }}</h5>
                        <h5>Email: {{ $official->email }}</h5>
                        <h5>Twitter: <a href="{{ $official->twitter }}" target="_blank">{{ $official->twitter }}</a></h5>
                        <h5>Facebook: <a href="{{ $official->facebook }}" target="_blank">{{ $official->facebook }}</a></h5>
                        <h5>YouTube: <a href="{{ $official->youtube }}" target="_blank">{{ $official->youtube }}</a></h5>
                        <h5>Instagram: <a href="{{ $official->instagram }}" target="_blank">{{ $official->instagram }}</a></h5>
                        <h5>LinkedIn: <a href="{{ $official->linkedin }}" target="_blank">{{ $official->linkedin }}</a></h5>
                        <a href="{{ route('admin.official.edit', $official->id) }}" class="btn btn-warning mt-3">Edit Official</a>
                    </div>
                </div>
            @endif
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
