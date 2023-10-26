@extends('layouts.app')

@section('content')
    <h1>Create Akun</h1>
    <form action="{{ route('akun.store') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="status">Status:</label>
        <input type="number" name="status" id="status">
        <br>
        <button type="submit">Create Akun</button>
    </form>
    <a href="{{ route('akun.index') }}">Back to Akun List</a>
@endsection
