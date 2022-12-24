@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="d-block mb-3">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <a href="/portofolio/{{ $data->id }}" class="btn btn-primary">Edit Portofolio</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th class="col-3">Template</th>
            @if ($data->template == 1)
            <td>Default</td>
            @elseif ($data->template == 2)
            <td>Shape</td>
            @elseif ($data->template == 3)
            <td>Box Green</td>
            @elseif ($data->template == 4)
            <td>Interactful</td>
            @elseif ($data->template == 5)
            <td>Tailwind Purple</td>
            @endif
        </tr>
        <tr>
            <th>Background (Template Default)</th>
            @if ($data->background == ' ')
            <td>Default</td>
            @elseif ($data->background == 'css/bg.css')
            <td>Hijau</td>
            @elseif ($data->background == 'css/bgbiru.css')
            <td>Biru</td>
            @elseif ($data->background == 'css/bgpink.css')
            <td>Pink</td>
            @elseif ($data->background == 'css/bgjingga.css')
            <td>Jingga</td>
            @endif
        </tr>
        <tr>
            <th>Judul Portofolio</th>
            <td>{{ $data->portfolio }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $data->deskripsi }}</td>
        </tr>
        <tr>
            <th>Foto</th>
            <td><img width="150px" src="{{ asset('storage/' . $data->gambar) }}" alt="foto"></td>
        </tr>
    </table>
@endsection
