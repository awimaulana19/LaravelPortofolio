<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portofolio {{ $data->user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset($data->background) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  </head>
  <body>
    <!-- Navbar -->
    <section class="nav-atas">
      <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand text-light teks-coba" href="#">My Portofolio</a>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="#exp">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="#projek">PROJECT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="#kontak">CONTACT</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link text-light" href="/"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- Akhir Navbar -->
    <!-- About -->
    <section id="abt" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 m-about1">
            <img src="{{ asset('storage/' . $data->gambar) }}" alt="Tidak Ada Gambar">
          </div>
          <div class="col-lg-6 col-md-12 m-about2">
            <h6>Hello I'm {{ $data->user->name }}</h6>
            <h1>{{ $data->portfolio }}</h1>
            <p>{!! $data->deskripsi !!}</p>
            <a href="https://www.instagram.com/{{ $data->ig }}" target="_blank" type="button" class="btn btn-danger">FOLLOW</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->
    <!-- experience -->
    <section id="exp" class="experience">
      <div class="container-fluid">
        <div class="row baris1 justify-content-center">
          <div class="col-lg-4 col-md-12 c1">
            <h5>Profile</h5>
            <p>Nama : {{ $data->user->name }}</p>
            <p>Tanggal Lahir : {{ $data->ttl }}</p>
            <p>Pendidikan : {{ $data->pendidikan }}</p>
            <p>Alamat : {{ $data->alamat }}</p>
          </div>
          <div class="col-lg-4 col-md-12 c2 persegi">
            <h5>Pendidikan Formal</h5>
            <p>SD : {{ $data->sd }}</p>
            <p>SMP : {{ $data->smp }}</p>
            <p>SMA : {{ $data->sma }}</p>
          </div>
          <div class="col-lg-4 col-md-12 c3 persegi">
            <h5>Kontak/Sosmed</h5>
            <p>Nomor : {{ $data->wa }}</p>
            <p>Email : {{ $data->email }}</p>
            <p>Instagram : {{ $data->ig }}</p>
            <p>Twitter : {{ $data->twitter }}</p>
          </div>
        </div>
        <div class="row baris2 justify-content-center">
          <div class="col-4 persegi-2">
            <h1>{{ $data->exp }}</h1>
            <h3>Years Experience</h3>
          </div>
          <div class="col-4 p2">
            <div class="row r2-1 panjang">
              <h2>{{ $data->client }}</h2>
              <p>Clients</p>
            </div>
            <div class="row r2-2 panjang">
              <h2>{{ $data->project }}</h2>
              <p>Completed Projects</p>
            </div>
          </div>
          <div class="col-4 p3">
            <div class="row r3-1 panjang">
              <h2>{{ $data->study }}</h2>
              <p>Years Study</p>
            </div>
            <div class="row r3-2 panjang">
              <h2>{{ $data->certificate }}</h2>
              <p>Certificate</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir experience -->
    <!-- Project -->
    <section id="projek" class="project">
      <div class="container">
        <div class="row ktk-atas">
          <div class="col-8">
            <h1>Featured Projects</h1>
            <p>Beberapa Project Yang Telah Saya Buat</p>
          </div>
          <div class="col-4">
            <a href="/allproject/{{ $data->user->username }}" type="button" class="btn btn-danger">VIEW ALL</a>
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
      </div>
    </section>
    <!-- Akhir project -->
    <!-- contact -->
    <section id="kontak" class="contact">
      <div class="container">
        <div class="row">
          <div class="row pembungkus">
            <div class="col-6 align-self-center">
              <h1>Let's Work Together on your next project</h1>
              <p>Silahkan Klik Tombol Disamping Untuk Menghubungi Saya</p>
            </div>
            <div class="col-6 d-flex align-self-center justify-content-center">
              <a href="http://wa.me/{{ $data->wa }}" type="button" class="btn btn-danger" target="_blank">CONTACT</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir contact -->
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4 d-flex justify-content-center pt-4">
            <a href="https://www.instagram.com/{{ $data->ig }}" class="bi bi-instagram text-white" target="_blank"></a>
            <a href="https://twitter.com/{{ $data->twitter }}" class="bi bi-twitter text-white ps-4 pe-4" target="_blank"></a>
            <a href="http://wa.me/{{ $data->wa }}" class="bi bi-whatsapp text-white" target="_blank"></a>
          </div>
          <div class="col-4 d-flex justify-content-end pt-4">
            <p>Created By Kelompok 2</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->
    <div class="bg"></div>
    {{-- <div class="bg-atas"></div> --}}
    <!-- Script -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Akhir Script -->
  </body>
</html>
