@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h2>{{ $data->judul }}</h2>
                <a href="/project" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i> Back to my post</a>
                <a href="/project/{{ $data->id }}/edit" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i>
                    Edit</a>
                <form action="/project/{{ $data->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Yakin Untuk Menghapus?')"><i
                            class="bi bi-x-circle"></i> Delete</button>
                </form>
                <img src="{{ asset('storage/' . $data->gambar) }}" class="card-img-top mb-3" width="1200px" height="400px"
                    alt="...">
                <p>{!! $data->isi !!}</p>
            </div>
        </div>
    </div>
@endsection
