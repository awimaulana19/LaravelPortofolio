@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/project">
            @csrf
            <div class="mb-3">
                <label for="Judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="Judul"
                    value="{{ old('judul') }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Project</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                @error('isi')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
                <trix-editor input="isi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
