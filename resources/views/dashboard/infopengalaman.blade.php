@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="d-block mb-3">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <a href="/pengalaman/{{ $data->id }}" class="btn btn-primary">Edit Pengalaman</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th class="col-3">Pengalaman Proyek</th>
            <td>{{ $data->exp }} Tahun</td>
        </tr>
        <tr>
            <th>Jumlah Client</th>
            <td>{{ $data->client }} Orang</td>
        </tr>
        <tr>
            <th>Pengalaman Belajar</th>
            <td>{{ $data->study }} Tahun</td>
        </tr>
        <tr>
            <th>Jumlah Project</th>
            <td>{{ $data->project }} Project</td>
        </tr>
        <tr>
            <th>Jumlah Sertifikat</th>
            <td>{{ $data->certificate }} Sertifikat</td>
        </tr>
    </table>
@endsection
