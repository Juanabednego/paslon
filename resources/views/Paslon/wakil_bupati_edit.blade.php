@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="my-4">Halaman Edit Profil Calon Wakil Bupati</h1>
    @if ($paslon_id == 1)
    <a href="{{route('admin.paslon.bupati')}}" class="btn btn-secondary mb-4">Kembali Ke Halaman Profil</a>
    @elseif ($paslon_id == 2)
    <a href="{{route('admin.paslon.wakil-bupati')}}" class="btn btn-secondary mb-4">Kembali Ke Halaman Profil</a>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.paslon.update-wakil-bupati') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $wakil_bupati->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi', $wakil_bupati->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $wakil_bupati->tanggal_lahir) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $wakil_bupati->tempat_lahir) }}" required>
                </div>

                <div class="mb-3">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp', $wakil_bupati->nomor_hp) }}" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $wakil_bupati->alamat) }}" required>
                </div>

                <div class="mb-3">
                    <label for="degree" class="form-label">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree" value="{{ old('degree', $wakil_bupati->degree) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $wakil_bupati->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{ old('agama', $wakil_bupati->agama) }}" required>
                </div>

                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $wakil_bupati->facebook) }}">
                </div>

                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter</label>
                    <input type="url" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $wakil_bupati->twitter) }}">
                </div>

                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $wakil_bupati->instagram) }}">
                </div>

                <div class="mb-3">
                    <label for="skype" class="form-label">Skype</label>
                    <input type="url" class="form-control" id="skype" name="skype" value="{{ old('skype', $wakil_bupati->skype) }}">
                </div>

                <div class="mb-3">
                    <label for="linkedin" class="form-label">LinkedIn</label>
                    <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $wakil_bupati->linkedin) }}">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    @if($wakil_bupati->foto)
                        <img src="{{ asset('storage/images/' . $wakil_bupati->foto) }}" alt="{{ $wakil_bupati->nama }}" class="img-thumbnail mt-2" style="width: 150px;">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Profil</button>
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
