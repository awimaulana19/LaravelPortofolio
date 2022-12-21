@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form method="post" action="/dashboard/portofolio/{{ $portofolio->id }}">
            @csrf
            <div class="mb-3">
                <label for="exp" class="form-label">Pengalaman Proyek (Tahun)</label>
                <input type="number" name="exp" class="form-control @error('exp') is-invalid @enderror" id="exp"
                    value="{{ old('exp', $portofolio->exp) }}">
                @error('exp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Jumlah Client</label>
                <input type="number" name="client" class="form-control @error('client') is-invalid @enderror"
                    id="client" value="{{ old('client', $portofolio->client) }}">
                @error('client')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="study" class="form-label">Pengalaman Belajar (Tahun)</label>
                <input type="number" name="study" class="form-control @error('study') is-invalid @enderror"
                    id="study" value="{{ old('study', $portofolio->study) }}">
                @error('study')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project" class="form-label">Jumlah Project</label>
                <input type="number" name="project" class="form-control @error('project') is-invalid @enderror"
                    id="project" value="{{ old('project', $portofolio->project) }}">
                @error('project')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="certificate" class="form-label">Jumlah Sertifikat</label>
                <input type="number" name="certificate" class="form-control @error('certificate') is-invalid @enderror"
                    id="certificate" value="{{ old('certificate', $portofolio->certificate) }}">
                @error('certificate')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
