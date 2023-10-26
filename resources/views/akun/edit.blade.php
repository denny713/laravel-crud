@extends('layouts.app')

@section('content')
    <h1>Edit Akun</h1>
    <form action="{{ route('akun.update', $akun->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="{{ $akun->username }}">
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $akun->nama }}">
        <br>
        <label for="status">Status:</label>
        <input type="number" name="status" id="status" value="{{ $akun->status }}">
        <br>
        <button type="submit">Update Akun</button>
    </form>
    <a href="{{ route('akun.index') }}">Back to Akun List</a>
@endsection
