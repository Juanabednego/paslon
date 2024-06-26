@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <div class="main-content">
        <div class="container mt-5">
            <h3>Edit Visi</h3>
            
            @if (session('success'))
                <div class="alert alert-success" role="alert" id="success-alert">
                    {{ session('success') }}
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form id="visi-form" action="{{ route('visi.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea class="form-control" id="visi" name="visi" rows="4">
                        @isset($visi)
                            {{ $visi->visi }}
                        @endisset
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
