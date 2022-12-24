@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="d-block mb-2">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <a href="/datadiri/profil/{{ $data->id }}" class="btn btn-primary">Profile</a>
        <a href="/datadiri/pendidikan/{{ $data->id }}" class="btn btn-primary">Pendidikan Formal</a>
        <a href="/datadiri/kontak/{{ $data->id }}" class="btn btn-primary">Kontak/Sosmed</a>
    </div>
@endsection
