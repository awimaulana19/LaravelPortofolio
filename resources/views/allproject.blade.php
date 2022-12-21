<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>All Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styleall.css" />
    <link rel="stylesheet" href="{{ $data->portofolio->background }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  </head>
  <body>
    <!-- Project -->
    <section id="projek" class="project">
      <div class="container">
        <div class="row ktk-atas">
          <div class="col-12">
            <h1>Featured Projects</h1>
            <p>Semua Project Yang Telah Saya Buat</p>
          </div>
        </div>
        <div class="row justify-content-center">
          @foreach ($project as $dataproject)
          <div class="col-lg-6 col-md-12 ktk">
            <div class="row galeri justify-content-center align-items-center">
              <img src="{{ asset('storage/' . $dataproject->gambar) }}" alt="" />
            </div>
            <div class="row kata">
              <h4>{{ $dataproject->judul }}</h4>
              <a href="/showproject/{{ $dataproject->id }}" class="more">KNOW MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>  
          @endforeach
        </div>
        <a class="btn btn-light mt-5 mb-4 d-flex justify-content-center" href="/index">Kembali Ke Portofolio</a>
      </div>
    </section>
    <!-- Akhir project -->
    <!-- Script -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Akhir Script -->
  </body>
</html>
