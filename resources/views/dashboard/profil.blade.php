@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/dashboard/portofolio/{{ $portofolio->id }}">
            @csrf
            <div class="mb-3">
                <label for="ttl" class="form-label">Tanggal Lahir</label>
                <input type="date" name="ttl" class="form-control @error('ttl') is-invalid @enderror"
                    id="ttl" value="{{ old('ttl', $portofolio->ttl) }}">
                @error('ttl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan"
                    value="{{ old('pendidikan', $portofolio->pendidikan) }}">
                @error('pendidikan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                    value="{{ old('alamat', $portofolio->alamat) }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
