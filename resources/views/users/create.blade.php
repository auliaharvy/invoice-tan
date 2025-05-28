@extends('layouts.app')
@section('content')
<h4>Tambah {{ $title }}</h4>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" value="{{ old('name', $data->name ?? '') }}" class="form-control" required>
        @error('name')
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
        <label>Password</label>
        <input type="password" name="password" value="{{ old('password', $data->password ?? '') }}" class="form-control" required>
        @error('password')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
