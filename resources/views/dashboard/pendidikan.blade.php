@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="post" action="/dashboard/portofolio/{{ $portofolio->id }}">
            @csrf
            <div class="mb-3">
                <label for="sd" class="form-label">SD</label>
                <input type="text" name="sd" class="form-control @error('sd') is-invalid @enderror" id="sd"
                    value="{{ old('sd', $portofolio->sd) }}">
                @error('sd')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="smp" class="form-label">SMP</label>
                <input type="text" name="smp" class="form-control @error('smp') is-invalid @enderror" id="smp"
                    value="{{ old('smp', $portofolio->smp) }}">
                @error('smp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sma" class="form-label">SMA</label>
                <input type="text" name="sma" class="form-control @error('sma') is-invalid @enderror" id="sma"
                    value="{{ old('sma', $portofolio->sma) }}">
                @error('sma')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
