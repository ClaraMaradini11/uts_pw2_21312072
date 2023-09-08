@extends('layout.master')

@section('judul')
Tambah Peran
@endsection

@section('content')

<form action="/peran/{{ $peran ->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="{{ $peran->film }}" class="form-control">
        @error('film')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="cast" value="{{ $peran->cast }}" class="form-control">
        @error('cast')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control">
        @error('nama')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>



    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
