@extends('layouts.app')

@section('content')
    <h1>Akun Details</h1>
    <ul>
        <li>ID: {{ $akun->id }}</li>
        <li>Username: {{ $akun->username }}</li>
        <li>Nama: {{ $akun->nama }}</li>
        <li>Status: {{ $akun->status }}</li>
    </ul>
    <a href="{{ route('akun.index') }}">Back to Akun List</a>
@endsection
