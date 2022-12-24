<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- CSS Local -->
  <link rel="stylesheet" href="{{ asset('template4/css/style5.css') }}" />

  <!-- Font From Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;700&family=Roboto:wght@900&display=swap"
    rel="stylesheet">

  <!-- Icon From FontAwesome -->
  <script src="https://kit.fontawesome.com/c12c059ff2.js" crossorigin="anonymous"></script>

  <title>Portofolio {{ $data->user->name }}</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="height: 5rem;">
    <div class="container">
      <a class="navbar-brand poppins" href="#">My Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav fw-bold ms-auto poppins">
          <li class="nav-item">
            <a class="nav-link text-warning me-4" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary me-4" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary me-4" href="#project">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary me-4" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-primary" href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard"><i
                                  class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li>
                          <form action="/logout" method="post">
                              @csrf
                              <button class="dropdown-item" type="submit"><i
                                      class="bi bi-box-arrow-left"></i> Logout</button>
                          </form>
                      </li>
                  </ul>
              </li>
          @else
              <li class="nav-item">
                  <a class="nav-link text-primary" href="/"><i class="bi bi-box-arrow-in-right"></i>
                      Login</a>
              </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Of Navbar -->

  <!-- Landing Page -->
  <section class="jumbotron text-center text-white">
    <div class="container">
      <br>
      <div class="row align-items-center">
        <div class="col-md text-start">
          <p class="text-landing2 fs-4 fw-bold mb-0">HELLO</p>
          <h1 class="display-1 roboto text-landing2 fw-bolder">I AM <span class="text-landing1">{{ $data->user->name }}</span></h1>
          <p class="lead text-dark fs-3 mt-3 mb-0"><br></p>
          <p class="lead2 text-dark fw-light fs-4 mb-4 mt-0"><br><br></p>
          <a href="#contact"><button type="button" class=" btn1 btn btn-primary rounded-pill mb-5 ps-3 pe-3">Let's
              Talk!</button></a>
        </div>
        <div class="col-md">
          <img src="{{ asset('template4/images/landingpage.svg') }}" alt="landing" class="img-fluid">
        </div>
      </div>
      <br><br>
    </div>
  </section>
  <!-- End Of Landing Page -->


  <!-- About Me -->
  <section class="about" id="about">
    <div class="container text-white">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset('storage/' . $data->gambar) }}" alt="profile" class="img-thumbnail rounded-circle border-0">
        </div>

        <div class="col-md-6 text-center ps-3 pe-3" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
          <br>
          <p class="fw-bold fs-3">HI, Nice to meet you.</p>
          <br>
          {{ $data->deskripsi }}
          <br><br>
          <a target="_blank" href="https://www.instagram.com/{{ $data->ig }}">
            <button type="button" data-aos="zoom-in-down" data-aos-delay="500" data-aos-duration="1500"
              class="btn btn-warning rounded-pill mb-5 ps-3 pe-3 fw-bold text-dark mt-3">Follow Me</button></a>
        </div>
      </div>
      <br>

    </div>
  </section>
  <!-- End Of About Me -->


  <section class="project">
    <!-- Panel Spesializing -->
    <div class="container text-white pb-5">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
        <div class="col-10 align-self-center panel shadow pb-5 pt-5">
          <p class="text-center poppins text-primary fs-5 fw-bold mb-0">About Me</p>
          <br>
          <div class="row justify-content-center ps-3 pe-3">
            <div class="col-md-4 p-1">
              <p class="text-center text-primary fs-6 fw-bold mb-0">Profile</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Nama : {{ $data->user->name }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Tanggal Lahir : {{ $data->ttl }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Pendidikan : {{ $data->pendidikan }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Alamat : {{ $data->alamat }}</p>
            </div>
            <div class="col-md-4 p-1">
              <p class="text-center text-primary fs-6 fw-bold mb-0">Pendidikan Formal</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">SD : {{ $data->sd }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">SMP : {{ $data->smp }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">SMA : {{ $data->sma }}</p>
            </div>
            <div class="col-md-4 p-1">
              <p class="text-center text-primary fs-6 fw-bold mb-0">Kontak/Sosmed</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Nomor : {{ $data->wa }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Email : {{ $data->email }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Instagram : {{ $data->ig }}</p>
              <p class="text-center text-dark uk1 pt-1 mt-0">Twitter : {{ $data->twitter }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="project"></div>
    <!-- End Of Panel -->

    <br><br><br>
    <p class="text-primary text-center fs-1 fw-bold poppins">MY PROJECTS</p>
    <br><br><br>

    <!-- My Project -->
    <div class="container">
      @if ($project->count())
      <div id="carouselExampleDark" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="d-flex align-items-center">

          <!-- Button Prev -->
          <div class="text-center">
            <button class="project border-0" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
          </div>
          <!-- End Of Button Prev -->

          <!-- Project Items -->
          <div class="carousel-inner">

            <!-- Project 1 -->
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="card border-0">
                <div class="row align-items-center p-3">
                  <div class="col-md-6">
                    <p class="text-warning fw-bold fs-4 pt-4 ps-4 poppins">{{ $project[0]->judul }}</p><br>
                    <p class="text-dark fs-6 ps-4 pe-5">{{ $project[0]->isi }}</p>
                    <a class="btn btn-primary btn-sm ms-4 rounded-pill ps-3 pe-3 mb-5 poppins"
                      href="/showproject/{{ $project[0]->id }}">See Project</a>
                  </div>
                  <div class="col-md-6 p-3 pe-5">
                    <a href="/showproject/{{ $project[0]->id }}">
                      <img src="{{ asset('storage/' . $project[0]->gambar) }}" class="card-img-top shadow" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Of Project 1 -->

            <!-- Project 2 -->
            @foreach ($project->skip(1) as $dataproject)
            <div class="carousel-item">
              <div class="card border-0">
                <div class="row align-items-center p-3">
                  <div class="col-md-6">
                    <p class="text-warning fw-bold fs-4 pt-4 ps-4 poppins">{{ $dataproject->judul }}</p><br>
                    <p class="text-dark fs-6 ps-4 pe-5">{{ $dataproject->isi }}</p>
                    <a class="btn btn-primary btn-sm ms-4 rounded-pill ps-3 pe-3 mb-5 poppins"
                      href="/showproject/{{ $dataproject->id }}">See Project</a>
                  </div>
                  <div class="col-md-6 p-3 pe-5">
                    <a href="/showproject/{{ $dataproject->id }}">
                      <img src="{{ asset('storage/' . $dataproject->gambar) }}" class="card-img-top shadow" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- End Of Project 2 -->
            
          </div>
          <!-- End Of Project Items -->
          
          <!-- Button Next -->
          <div class="text-center">
            <button class="project border-0" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
          <!-- End Of Button Next -->
          
        </div>

        <!-- Carousel Indicator -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
          aria-label="Slide 6"></button>
        </div>
        
      </div>
      @else
      <div class="row">
        <p class="text-center" style="font-size: 30px;"><b>Tidak Ada Proyek</b></p>
      </div>
      @endif
    </div>
    <!-- End Of My Project -->
    <br><br><br><br>
    <div id="contact"></div>
    <br><br><br>
  </section>

  <!-- Color Gradient -->
  <div class="gradient" id="gradient">
    <p class="poppins text-primary text-center fs-1 fw-bold mb-0">GET IN TOUCH</p>
    <p class="poppins fw-light text-center mt-0">
      Interesting in working together? <br>
      Feel free to contact me for any project or collaboration.
    </p>
    <br>
  </div>

  <!-- Contact Section -->
  <section class="contact">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('template4/images/contact.svg') }}" alt="contact" class="img-fluid">
        </div>
        <div class="col-md-6">

          <!-- Notif after send message -->
          <div id="status"><br></div>

          <!-- Form Message -->
          <form action="https://formspree.io/f/xdovnwla" method="post" id="formcontact">
            <div class="mb-3 mt-1">
              <input type="text" class="form-control form-control-lg formcustom border-0" id="Nama" name="Nama Lengkap"
                placeholder="Full Name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control form-control-lg formcustom border-0" id="Email" name="Email"
                aria-describedby="emailHelp" placeholder="Your Email">
            </div>
            <div class="mb-3">
              <textarea class="form-control form-control-lg formcustom border-0" id="Pesan" name="Pesan" rows="3"
                placeholder="Message"></textarea>
            </div>
            <center>
              <button type="submit" class="btn btn-primary rounded-pill ps-4 pe-4 poppins">Send</button>
            </center>
          </form>
          <!-- End Of Form Message -->

        </div>
      </div>
    </div>
  </section>
  <!-- End Of Contact Section -->
  <br><br><br><br><br>

  <!-- Footer -->
  <footer class="bg-grey text-white text-center" id="footer">
    <div class="container pt-5 pb-4">
      <p class="text-dark">
        <a href="https://twitter.com/{{ $data->twitter }}" class="m-3 text-primary me-5"
            target="_blank"><i class="bi bi-twitter fs-2"></i></a>
        <a href="https://www.instagram.com/{{ $data->ig }}" class="m-3 text-primary me-5"
            target="_blank"><i class="bi bi-instagram fs-2"></i></a>
        <a href="http://wa.me/{{ $data->wa }}" class="m-3 text-primary" target="_blank"><i class="bi bi-whatsapp fs-2"></i></a>
      </p>
      <p class="text-dark text-center fw-light poppins">&copy;<span class="text-primary">2022 All Right Reserved</span>
        - Developed by {{ $data->user->name }}</p>
    </div>
  </footer>
  <!-- End Of Footer -->

  <!-- AOS Scroll Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- GSAP Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.lead', {
      duration: 2,
      delay: 0.1,
      text: 'I\'m a {{ $data->portfolio }}'
    });
    gsap.to('.lead2', {
      duration: 2.5,
      delay: 2.2,
      text: 'Welcome to my personal website, wanna discuss about something?'
    });
    gsap.from('.jumbotron img', {
      duration: 2,
      y: 50,
      opacity: 0,
      ease: 'expo.out'
    });
    gsap.from('.btn1', {
      duration: 1,
      delay: 4.5,
      y: -100,
      opacity: 0
    });
    //gsap.from('.navbar', { duration: 1.5, y: -100, opacity: 0, ease: 'bounce' });
  </script>

  <!-- Script send email 3rd party -->
  <script>
    var form = document.getElementById("formcontact");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("status");
      var data = new FormData(event.target);

      var nama = document.getElementById("Nama").value;
      var email = document.getElementById("Email").value;
      var message = document.getElementById("Pesan").value;
      if (nama != "" && email != "" && message != "") {
        fetch(event.target.action, {
          method: form.method,
          body: data,
          headers: {
            'Accept': 'application/json'
          }
        }).then(response => {
          status.innerHTML =
            "<div class='alert alert-warning pt-2 pb-2' role='alert'><i class='fas fa-check me-1'></i>Thanks for your message!</div>";
          form.reset()
        }).catch(error => {
          status.innerHTML =
            "<div class='alert alert-danger pt-2 pb-2' role='alert'><i class='fas fa-exclamation me-1'></i>Oops! There was a problem submitting your form</div>"
        });
      } else if (nama == "") {
        status.innerHTML =
          "<div class='alert alert-danger pt-2 pb-2' role='alert'><i class='fas fa-exclamation me-1'></i> Full Name field is empty</div>";
      } else if (email == "") {
        status.innerHTML =
          "<div class='alert alert-danger pt-2 pb-2' role='alert'><i class='fas fa-exclamation me-1'></i>Email field is empty</div>";
      } else if (message == "") {
        status.innerHTML =
          "<div class='alert alert-danger pt-2 pb-2' role='alert'><i class='fas fa-exclamation me-1'></i>You must type your message</div>";
      } else {
        status.innerHTML =
          "<div class='alert alert-danger pt-2 pb-2' role='alert'><i class='fas fa-exclamation me-1'></i>You must fill this form first!</div>";
      }


    }
    form.addEventListener("submit", handleSubmit)
  </script>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>