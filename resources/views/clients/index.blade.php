@extends('layouts.app')

@section('content')
    <h3>Daftar {{ $title }}</h3>
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">+ Tambah Klien</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $client)
                <tr>
                    <td>{{ $client->nama }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->no_hp }}</td>
                    <td>{{ $client->alamat }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus klien ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    <!-- Tempat untuk tabel -->
@endsection
