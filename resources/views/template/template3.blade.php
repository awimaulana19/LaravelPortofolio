<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio {{ $data->user->name }}</title>
    <link rel="stylesheet" href="{{ asset('template3/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>
<body>
   
   <header id="header">
       <h1><a href="index.html">Welcome</a></h1>
       <nav>
         <ul id="nav">
            <li> <a href="#works">Portofolio</a></li>
            <li> <a href="#about-myself">About</a></li>
            <li> <a href="#contact">Contact</a></li>
         </ul>
       <img src="{{ asset('template3/images/Enabled.png') }}" alt="">
      </nav>
   
     </header>
   
   <section class="intro" style="background-image: url('{{ asset('template3/images/Header-llustration-desktop@2x.png')}}');"
   >
     <h3 class="welcoming">Hey there. I’m {{ $data->user->name }}
        <span>I’m a {{ $data->portfolio }}</span> 
     </h3>
     <p class="description">
      {{ $data->deskripsi }}
     </p>
         <ul>
            <li><a href="https://www.instagram.com/{{ $data->ig }}" class="bi bi-instagram text-white"
               target="_blank"></a></li>
            <li><a href="https://twitter.com/{{ $data->twitter }}" class="bi bi-twitter text-white ps-4 pe-4"
               target="_blank"></a></li>
            <li><a href="http://wa.me/{{ $data->wa }}" class="bi bi-whatsapp text-white"
               target="_blank"></a></li>
         </ul>
   </section>

   <section id="works">
   
   <h3 class="Section-title">Recent Project</h3>
   @if ($project->count())
   @foreach ($project as $dataproject)
      <div class="card">
        <img src="{{ asset('storage/' . $dataproject->gambar) }}" alt="Gambar Proyek">
         <div>
            <p>{{ $dataproject->judul }}</p>
            <p style="font-size: 11px; font-weight: 500;">{{ $dataproject->isi }}</p>
            <br>
            <a class="button" href="/showproject/{{ $dataproject->id }}">See Project</a>
         </div>
      </div>
   @endforeach
   @else
        <p style="font-size: 30px;"><b>Tidak Ada Proyek</b></p>
   @endif
   </section>
   <section id="about-myself">
      <div class="about-intro">
      <h3>About Me</h3>
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
      <br>
         <a class="button" target="_blank" href="https://www.instagram.com/{{ $data->ig }}">Follow Me</a>
      </div>   
   </section>
   <section id="contact">
      <h3>
         I'm always interested in hearing about new projects, so if you'd like to chat please get in touch.
      </h3>
      <form action="https://formspree.io/f/xdovnwla" method="post">
         <div>
         <input type="text" id="nama" name="name" class="input" placeholder="Full name" required  maxlength="30">
         <input class="input" type="email" name="email" id="email" placeholder="Email address " required>
         <textarea class="input" name="message" id="message" cols="30" rows="10" placeholder="Enter ur text here" required maxlength="500"></textarea>
         </div>
         <button class="button" type="submit" value="submit">Get in touch</button>
      </form>
      <div class="footer">
      <img src="{{ asset('template3/images/Rectangle42.png') }}" alt="rectangle">
      <br>
      <ul class="from-list">
         <li><a href="https://www.instagram.com/{{ $data->ig }}" class="bi bi-instagram text-white"
            target="_blank"></a></li>
         <li><a href="https://twitter.com/{{ $data->twitter }}" class="bi bi-twitter text-white ps-4 pe-4"
            target="_blank"></a></li>
         <li><a href="http://wa.me/{{ $data->wa }}" class="bi bi-whatsapp text-white"
            target="_blank"></a></li>
      </ul>
      </div>
   </section>
</body>

