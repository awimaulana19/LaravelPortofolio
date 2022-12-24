@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="d-block mb-2">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $profile->name }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ $profile->username }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $profile->email }}</td>
        </tr>
    </table>
@endsection
