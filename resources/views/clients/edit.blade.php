@extends('layouts.app')
@section('content')
<h4>Edit Klien</h4>
<form action="{{ route('clients.update', $data->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $data->nama ?? '') }}" class="form-control" required>
        @error('nama')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>Telepon</label>
        <input type="text" name="no_hp" value="{{ old('no_hp', $data->no_hp ?? '') }}" class="form-control">
        @error('no_hp')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" value="{{ old('email', $data->email ?? '') }}" class="form-control">
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ old('alamat', $data->alamat ?? '') }}</textarea>
        @error('alamat')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
