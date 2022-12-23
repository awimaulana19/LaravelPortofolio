@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/project/{{ $data->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="Judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="Judul"
                    value="{{ old('judul', $data->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="hidden" name="gambarLama" value="{{ $data->gambar }}">
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
                <div>
                    <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" id="isi" cols="30" rows="10">{{ old('isi', $data->isi) }}</textarea>
                </div>
                @error('isi')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
