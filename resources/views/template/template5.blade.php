<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('template5//css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Portofolio {{ $data->user->name }}</title>
</head>

<body class="font-poppins scroll-smooth">
    <!-- navbar start -->
    <header class="bg-transparent absolute top-0 lef-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">My Portofolio</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-dark py-2 mx-8 flex  hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-dark py-2 mx-8 flex hover:text-primary">About
                                    Me</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base text-dark py-2 mx-8 flex hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#profile"
                                    class="text-base text-dark py-2 mx-8 flex hover:text-primary">Profile</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar end -->
    <!-- Hero Section Begin -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base text-primary md:text-xl">Halo Semua ✋ Saya, <span
                            class="block font-bold text-dark text-2xl mt-1 lg:text-4xl max-w-md">{{ $data->user->name }}</span>
                    </h1>
                    <h2 class="font-medium mb-10 lg:text-2xl">{{ $data->portfolio }}</h2>

                    <a href="#contact"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-500 ease-in-out">Contact
                        me</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img width="400px" src="{{ asset('storage/' . $data->gambar) }}" alt="foto"
                            class="max-w-full mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- About me Begin -->
    <section id="about" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-lg mb-3 lg:text-2xl">About Me</h4>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">{{ $data->deskripsi }}</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-3">Follow me on:</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Untuk mengetahui keseharianku atau
                        karya-karya lain yang aku buat kalian bisa lihat di social mediaku yang bisa kalian kunjungi
                        dengan menekan tombol dibawah</p>
                    <div class="flex items-center">
                        <!-- twitter -->
                        <a href="https://twitter.com/{{ $data->twitter }}" target="_blank"
                            class="w-9 h-9 flex justify-center items-center border border-slate-300 mr-3 rounded-full hover:border-primary hover:bg-primary hover:text-white transition duration-300">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Twitter</title>
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <!-- instagram -->
                        <a href="https://www.instagram.com/{{ $data->ig }}" target="_blank"
                            class="w-9 h-9 flex justify-center items-center border border-slate-300 mr-3 rounded-full hover:border-primary hover:bg-primary hover:text-white transition duration-300">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About me End -->
    <!-- portfolio section start -->
    <section id="portfolio" class="pt-36 pb-16 bg-zinc-200">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center">
                    <h4 class="font-semibold font-lg text-primary mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">My Project</h2>
                    @if ($project->count())
                        <p class="text-md font-medium text-secondary md:text-lg">Berikut ini adalah project yang sudah saya buat</p>
                </div>
                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 mx-auto">
                    @foreach ($project as $dataproject)
                        <div class="mb-12 p-4 md:w-1/2">
                            <div class="rounded-md shadow-md overflow-hidden">
                                <a href="/showproject/{{ $dataproject->id }}" target="_blank">
                                    <img src="{{ asset('storage/' . $dataproject->gambar) }}" alt="Gambar"
                                        width="w-full">
                                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">{{ $dataproject->judul }}
                                    </h3>
                                    <p class="font-medium text-base text-secondary">{{ $dataproject->isi }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p style="font-size: 30px;"><b>Tidak Ada Proyek</b></p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section end -->
    <!-- skill section start -->
    <section id="profile" class="pt-36 pb-32 bg-zinc-500">
        <div class="container">
            <div class="w-full px-4">
                <div style="padding-left: 40px;">
                    <h2 class="font-bold text-white text-3xl mb-5 sm:text-4xl lg:text-5xl">My Profile</h2>
                </div>

            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <div style="padding-right: 100px;">
                        <p class="text-primary md:text-xl">Profile</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Nama : {{ $data->user->name }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Tanggal Lahir : {{ $data->ttl }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Pendidikan : {{ $data->pendidikan }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Alamat : {{ $data->alamat }}</p>
                    </div>
                    <div style="padding-right: 100px;">
                        <p class="text-primary md:text-xl">Pendidikan Formal</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">SD : {{ $data->sd }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">SMP : {{ $data->smp }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">SMA : {{ $data->sma }}</p>
                        <br>
                    </div>
                    <div style="padding-right: 100px;">
                        <p class="text-primary md:text-xl">Kontak/Sosmed</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Nomor : {{ $data->wa }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Email : {{ $data->email }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Instagram : {{ $data->ig }}</p>
                        <p class="text-md font-medium text-slate-900 md:text-lg">Twitter : {{ $data->twitter }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill section end -->
    <!-- contact form start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center">
                    <h4 class="font-semibold font-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Us:</h2>
                    <p class="text-md font-medium text-secondary md:text-lg mb-4">Hubungi saya dengan mengisi form dibawah:</p>
                </div>
            </div>
            <form action="https://formspree.io/f/xdovnwla" method="post">
                <div class="w-full lg:w-2/3 lg:mx-auto" id="contact">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base text-primary font-bold">Name</label>
                        <input type="text" name="name" id="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base text-primary font-bold">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base text-primary font-bold">Message</label>
                        <textarea id="message" name="message"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32">
                    </textarea>
                    </div>
                    <div class="w-full px-4">
                        <button type="submit"
                            class="text-base text-white font-semibold bg-primary py-3 px-8 rounded-full w-full hover:opacity-80">Contact
                            Me</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- contact form end -->
    <!-- footer start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2 md:mx-auto">
                    <h2 class="font-bold text-4xl text-white mb-5">My Portofolio</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
                    <p>{{ $data->email }}</p>
                    <p>{{ $data->wa }}</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/2 md:mx-auto">
                    <h3 class="font-semibold text-xl text-white mb-5">Link</h3>
                    <ul class="text-slate-300">
                        <li><a href="#home" class="hover:text-primary duration-500 transition">Beranda</a></li>
                        <li><a href="#about" class="hover:text-primary duration-500 transition">About Me</a></li>
                        <li><a href="#portfolio" class="hover:text-primary duration-500 transition">PortFolio</a></li>
                        <li><a href="#profile" class="hover:text-primary duration-500 transition">Profile</a></li>
                        <li><a href="#contact" class="hover:text-primary duration-500 transition">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-400">
                <div class="flex items-center justify-center mb-2">
                   <!-- twitter -->
                   <a href="https://twitter.com/{{ $data->twitter }}" target="_blank"
                    class="w-9 h-9 flex justify-center items-center border border-slate-300 mr-3 rounded-full hover:border-primary hover:bg-primary hover:text-white transition duration-300">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <path
                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </a>
                <!-- instagram -->
                <a href="https://www.instagram.com/{{ $data->ig }}" target="_blank"
                    class="w-9 h-9 flex justify-center items-center border border-slate-300 mr-3 rounded-full hover:border-primary hover:bg-primary hover:text-white transition duration-300">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Instagram</title>
                        <path
                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </a>
                </div>
                <p class="font-medium text-sm text-slate-200 text-center">Made by <span class="text-pink-500">❤</span>
                    <a target="_blank" href="https://www.instagram.com/{{ $data->ig }}" class="font-bold text-primary">{{ $data->user->name }}</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <script src="{{ asset('template5/js/script.js') }}"></script>
</body>

</html>
