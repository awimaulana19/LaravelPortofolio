@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/dashboard/portofolio/{{ $portofolio->id }}">
            @csrf
            <div class="mb-3">
                <label for="template" class="form-label">Template</label>
                <br>
                <select class="form-select" id="template" name="template">
                    @if (old('template', $portofolio->template) == 1)
                        <option value="1" selected>Default</option>
                        <option value="2">Shape</option>
                        <option value="3">Box Green</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('template', $portofolio->template) == 2)
                        <option value="1">Default</option>
                        <option value="2" selected>Shape</option>
                        <option value="3">Box Green</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('template', $portofolio->template) == 3)
                        <option value="1">Default</option>
                        <option value="2">Shape</option>
                        <option value="3" selected>Box Green</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('template', $portofolio->template) == 4)
                        <option value="1">Default</option>
                        <option value="2">Shape</option>
                        <option value="3">Box Green</option>
                        <option value="4" selected>Pink</option>
                        <option value="5">Jingga</option>
                    @elseif (old('template', $portofolio->template) == 5)
                        <option value="1">Default</option>
                        <option value="2">Shape</option>
                        <option value="3">Box Green</option>
                        <option value="4">Pink</option>
                        <option value="5" selected>Jingga</option>
                    @else
                        <option value="1">Default</option>
                        <option value="2">Shape</option>
                        <option value="3">Box Green</option>
                        <option value="4">Pink</option>
                        <option value="5">Jingga</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="background" class="form-label">Background (Template Default)</label>
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
                <div>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ old('deskripsi', $portofolio->deskripsi) }}</textarea>
                </div>
                @error('deskripsi')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
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
