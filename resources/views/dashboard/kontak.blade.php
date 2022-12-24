@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/datadiri/{{ $portofolio->id }}">
            @csrf
            <div class="mb-3">
                <label for="wa" class="form-label">Nomor</label>
                <input type="text" name="wa" class="form-control @error('wa') is-invalid @enderror" id="wa"
                    value="{{ old('wa', $portofolio->wa) }}">
                @error('wa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email', $portofolio->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ig" class="form-label">Instagram</label>
                <input type="text" name="ig" class="form-control @error('ig') is-invalid @enderror" id="ig"
                    value="{{ old('ig', $portofolio->ig) }}">
                @error('ig')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter"
                    value="{{ old('twitter', $portofolio->twitter) }}">
                @error('twitter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
