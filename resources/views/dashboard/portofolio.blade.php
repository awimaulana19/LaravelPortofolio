@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/dashboard/portofolio/{{ $portofolio->id }}">
            @csrf
            <div class="mb-3">
                <label for="background" class="form-label">Background</label>
                <br>
                <select class="form-select" id="background" name="background">
                    @if (old('background', $portofolio->background) == ' ')
                        <option value="1" selected>Default</option>
                        <option value="2">Hijau</option>
                        <option value="3">Biru</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('background', $portofolio->background) == 'css/bg.css')
                        <option value="1">Default</option>
                        <option value="2" selected>Hijau</option>
                        <option value="3">Biru</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('background', $portofolio->background) == 'css/bgbiru.css')
                        <option value="1">Default</option>
                        <option value="2">Hijau</option>
                        <option value="3" selected>Biru</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('background', $portofolio->background) == 'css/bgpink.css')
                        <option value="1">Default</option>
                        <option value="2">Hijau</option>
                        <option value="3">Biru</option>
                        <option value="4" selected>Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('background', $portofolio->background) == 'css/bgjingga.css')
                        <option value="1">Default</option>
                        <option value="2">Hijau</option>
                        <option value="3">Biru</option>
                        <option value="4">Pink</option>
                        <option value="5" selected>Jingga</option>
                    @else
                        <option value="1">Default</option>
                        <option value="2">Hijau</option>
                        <option value="3">Biru</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="portfolio" class="form-label">Judul Portofolio</label>
                <input type="text" name="portfolio" class="form-control @error('portfolio') is-invalid @enderror"
                    id="portfolio" value="{{ old('portfolio', $portofolio->portfolio) }}">
                @error('portfolio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                @error('deskripsi')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <input id="deskripsi" type="hidden" name="deskripsi"
                    value="{{ old('deskripsi', $portofolio->deskripsi) }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <input type="hidden" name="gambarLama" value="{{ $portofolio->gambar }}">
            <div class="mb-3">
                <label for="gambar" class="form-label">Foto</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                    name="gambar">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
