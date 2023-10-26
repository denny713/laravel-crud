@extends('layouts.app')

@section('content')
    <h1>Akun List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($akuns as $akun)
                <tr>
                    <td>{{ $akun->id }}</td>
                    <td>{{ $akun->username }}</td>
                    <td>{{ $akun->nama }}</td>
                    <td>{{ $akun->status }}</td>
                    <td>
                        <a href="{{ route('akun.show', $akun->id) }}">View</a>
                        <a href="{{ route('akun.edit', $akun->id) }}">Edit</a>
                        <form action="{{ route('akun.destroy', $akun->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('akun.create') }}">Add Akun</a>
@endsection
