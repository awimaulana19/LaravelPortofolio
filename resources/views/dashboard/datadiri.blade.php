@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="d-block mb-2">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-4">
            <h5>Profile</h5>
            <a href="/datadiri/profil/{{ $data->id }}" class="btn btn-sm btn-primary mb-3">Edit</a>
            <table class="table">
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $data->ttl }}</td>
                </tr>
                <tr>
                    <th>Pendidikan</th>
                    <td>{{ $data->pendidikan }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $data->alamat }}</td>
                </tr>
            </table>
        </div>
        <div class="col-4">
            <h5>Pendidikan</h5>
            <a href="/datadiri/pendidikan/{{ $data->id }}" class="btn btn-sm btn-primary mb-3">Edit</a>
            <table class="table">
                <tr>
                    <th>SD</th>
                    <td>{{ $data->sd }}</td>
                </tr>
                <tr>
                    <th>SMP</th>
                    <td>{{ $data->smp }}</td>
                </tr>
                <tr>
                    <th>SMA</th>
                    <td>{{ $data->sma }}</td>
                </tr>
            </table>
        </div>
        <div class="col-4">
            <h5>Kontak/Sosmed</h5>
            <a href="/datadiri/kontak/{{ $data->id }}" class="btn btn-sm btn-primary mb-3">Edit</a>
            <table class="table">
                <tr>
                    <th>Nomor</th>
                    <td>{{ $data->wa }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td>{{ $data->ig }}</td>
                </tr>
                <tr>
                    <th>Twitter</th>
                    <td>{{ $data->twitter }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
