  <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
      <link rel="stylesheet" href="{{ asset('template2/css/root.css') }}" />
      <link rel="stylesheet" href="{{ asset('template2/css/navbar.css') }}" />
      <link rel="stylesheet" href="{{ asset('template2/css/header.css') }}" />
      <link rel="stylesheet" href="{{ asset('template2/css/konten.css') }}" />
      <link rel="stylesheet" href="{{ asset('template2/css/footer.css') }}" />
      <script src="{{ asset('template2/js/jquery-3.6.0.js') }}"></script>
      <script src="{{ asset('template2/js/anime.min.js') }}"></script>
      <title>Portofolio {{ $data->user->name }}</title>
  </head>

  <body>
      <nav>
          <div class="menu-toggle">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <div class="logo">
              <h4>My Portofolio</h4>
          </div>
          <ul>
              <li><a href="#beranda">Beranda</a></li>
              <li><a href="#tentang">Tentang</a></li>
              <li><a href="#projek">Projek</a></li>
              <li><a href="#kontak">Kontak</a></li>
            @auth
                <li>
                    <a href="/dashboard">
                        Hy, {{ Auth::user()->name }}
                    </a>
                </li>
            @else
                <li>
                    <a href="/"><i class="bi bi-box-arrow-in-right"></i>
                        Login</a>
                </li>
            @endauth
          </ul>
      </nav>
      <section class="header" id="beranda">
          <img src="{{ asset('storage/' . $data->gambar) }}" alt="Foto" />
          <h1>{{ $data->user->name }}</h1>
          <p>{{ $data->portfolio }}</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#ffff" fill-opacity="1"
                  d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,138.7C420,139,480,85,540,96C600,107,660,181,720,218.7C780,256,840,256,900,234.7C960,213,1020,171,1080,144C1140,117,1200,107,1260,122.7C1320,139,1380,181,1410,202.7L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
              </path>
          </svg>
      </section>
      <section class="about" id="tentang">
          <h2 class="svg-demo">About</h2>
          <div class="text">
              <p>
                  {{ $data->deskripsi }}
              </p>
              <p>
                  <b>Profile</b>
                  <br>
                  Nama : {{ $data->user->name }}
                  <br>
                  Tanggal Lahir : {{ $data->ttl }}
                  <br>
                  Pendidikan : {{ $data->pendidikan }}
                  <br>
                  Alamat : {{ $data->alamat }}
                  <br>
                  <br>
                  <b>Pendidikan Formal</b>
                  <br>
                  SD : {{ $data->sd }}
                  <br>
                  SMP : {{ $data->smp }}
                  <br>
                  SMA : {{ $data->sma }}
                  <br>
                  <br>
                  <b>Kontak/Sosmed</b>
                  <br>
                  Nomor : {{ $data->wa }}
                  <br>
                  Email : {{ $data->email }}
                  <br>
                  Instagram : {{ $data->ig }}
                  <br>
                  Twitter : {{ $data->twitter }}
                  <br>
              </p>
          </div>
          <a target="_blank" href="https://www.instagram.com/{{ $data->ig }}">Follow Me</a>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#e2edff" fill-opacity="1"
                  d="M0,128L30,154.7C60,181,120,235,180,218.7C240,203,300,117,360,122.7C420,128,480,224,540,245.3C600,267,660,213,720,202.7C780,192,840,224,900,224C960,224,1020,192,1080,186.7C1140,181,1200,203,1260,202.7C1320,203,1380,181,1410,170.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
              </path>
          </svg>
      </section>
      <section class="projek" id="projek">
          <h2 class="svg-demo">Projek</h2>
          <article>
            @foreach ($project as $dataproject)
              <div class="card">
                  <img src="{{ asset('storage/' . $dataproject->gambar) }}" alt="" />
                  <p>{{ $dataproject->judul }}</p>
              </div>
            @endforeach
          </article>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#ffff" fill-opacity="1"
                  d="M0,192L30,208C60,224,120,256,180,261.3C240,267,300,245,360,224C420,203,480,181,540,165.3C600,149,660,139,720,149.3C780,160,840,192,900,208C960,224,1020,224,1080,218.7C1140,213,1200,203,1260,197.3C1320,192,1380,192,1410,192L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
              </path>
          </svg>
      </section>
      <section class="kontak" id="kontak">
          <h2 class="svg-demo">Kontak</h2>
          <form target="_blank" action="http://wa.me/{{ $data->wa }}">
              <div class="group">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" />
              </div>
              <div class="group">
                  <label for="pesan">Pesan</label>
                  <textarea id="pesan" name="pesan"></textarea>
              </div>
              <div class="group">
                  <input type="submit" value="Kirim" />
              </div>
          </form>
      </section>
      <footer>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#0d6efd" fill-opacity="1"
                  d="M0,192L30,176C60,160,120,128,180,128C240,128,300,160,360,181.3C420,203,480,213,540,186.7C600,160,660,96,720,112C780,128,840,224,900,218.7C960,213,1020,107,1080,58.7C1140,11,1200,21,1260,42.7C1320,64,1380,96,1410,112L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
              </path>
          </svg>
          <h3>Created By {{ $data->user->name }}</h3>
      </footer>
      <script src="{{ asset('template2/js/navigasi.js') }}"></script>
      <script src="{{ asset('template2/js/scroll-out.js') }}"></script>
      <script>
          ScrollOut({
              targets: "h1, h2, img, p, a, .card, form",
          });
      </script>
  </body>
