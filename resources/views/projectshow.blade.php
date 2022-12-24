<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/styleproject.css') }}">
    <link rel="stylesheet" href="{{ asset($data->background) }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <h2 class="mb-4">{{ $posting->judul }}</h2>
                    <img src="{{ asset('storage/' . $posting->gambar) }}" class="card-img-top mb-2" width="1000px" height="500px"
                        alt="...">
                <p>{{ $posting->isi }}</p>
                <a class="btn btn-light mt-3 mb-4" href="/index/{{ $data->user->username }}">Kembali Ke Portofolio</a>
            </div>
        </div>
    </div>
</body>
</html>