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

    <div>
        <a href="/dashboard/portofolio/{{ $data->id }}" class="btn btn-primary">Edit Portofolio</a>
        <a href="/dashboard/datadiri" class="btn btn-primary">Edit Data Diri</a>
        <a href="/dashboard/pengalaman/{{ $data->id }}" class="btn btn-primary">Edit Pengalaman</a>
    </div>
@endsection
