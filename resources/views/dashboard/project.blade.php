@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="d-block mb-3">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <a href="/project/create" class="btn btn-primary">Create Project</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="col-2">No</th>
                <th class="col-8">Judul</th>
                <th class="col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $project)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $project->judul }}</td>
                    <td>
                        <a href="/project/{{ $project->id }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                        <a href="/project/{{ $project->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                        <form action="/project/{{ $project->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin Untuk Menghapus?')"><i class="bi bi-x-circle"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
