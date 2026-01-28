<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AKOM IT Developer</title>

  <!-- Icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon_io/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon_io//favicon-32x32.png"')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon_io/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('images/favicon_io/site.webmanifest')}}">

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

     <!-- Styles -->
     @livewireStyles
     
     
     <!-- Google Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P9MV30DZK0"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-P9MV30DZK0');
</script>
 </head>
  <style>
    /* Animasi custom untuk fadeInUp */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .animate-fadeInUp {
      animation: fadeInUp 1s ease-out both;
    }

    /*smooth scroll */
    html {
      scroll-behavior: smooth;
    }
    
  </style>
</head>
<body class="antialiased text-gray-900">

  <!-- Header / Navbar -->
  <header class="bg-white fixed w-full z-30 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <a href="#" class="text-2xl font-bold text-blue-600">AKOM IT Developer</a>
        <nav class="hidden md:flex space-x-8">
          <a href="#hero" class="text-gray-700 hover:text-blue-600 transition">Home</a>
          <a href="#about" class="text-gray-700 hover:text-blue-600 transition">Tentang Kami</a>
          <a href="#kelebihan" class="text-gray-700 hover:text-blue-600 transition">Keunggulan</a>
          <a href="#services" class="text-gray-700 hover:text-blue-600 transition">Layanan</a>
          <a href="#portfolio" class="text-gray-700 hover:text-blue-600 transition">Portfolio</a>
          <a href="#testimonials" class="text-gray-700 hover:text-blue-600 transition">Testimoni</a>
          <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Kontak</a>
        </nav>
        <div class="md:hidden">
          <!-- Tombol menu mobile -->
          <button id="menu-btn" class="focus:outline-none">
            <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden">
      <nav class="px-2 pt-2 pb-4 space-y-1 bg-white">
        <a href="#hero" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Home</a>
        <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Tentang Kami</a>
        <a href="#kelebihan" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Keunggulan</a>
        <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Layanan</a>
        <a href="#portfolio" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Portfolio</a>
        <a href="#testimonials" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Testimoni</a>
        <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Kontak</a>
      </nav>
    </div>
  </header>
<section class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center animate-fadeInUp">
            <h1 class="text-6xl font-bold text-blue-600 mb-4">Under Construction</h1>
            <p class="text-xl text-gray-700 mb-6">Situs ini sedang dalam pengembangan. Silakan kembali lagi nanti.</p>
            <a href="/" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                <span class="material-icons mr-2">home</span>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>


  
    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Tentang Kami</h3>
                    <p class="text-gray-400">
                        AKOM IT Developer adalah perusahaan yang menyediakan solusi digital inovatif untuk website, aplikasi mobile, dan perangkat IoT. Kami berkomitmen untuk memberikan layanan terbaik bagi klien kami.
                    </p>
                </div>
                <!-- Quick Links Section -->
                <div class="md:col-span-1">
                    <h3 class="text-xl font-bold mb-4 text-white">Tautan Cepat</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <ul class="space-y-2">
                            <li><a href="#hero" class="hover:text-white transition">Home</a></li>
                            <li><a href="#about" class="hover:text-white transition">Tentang Kami</a></li>
                            <li><a href="#kelebihan" class="hover:text-white transition">Keunggulan</a></li>
                            <li><a href="#services" class="hover:text-white transition">Layanan</a></li>
                        </ul>
                        <ul class="space-y-2">
                            <li><a href="#portfolio" class="hover:text-white transition">Portfolio</a></li>
                            <li><a href="#testimonials" class="hover:text-white transition">Testimoni</a></li>
                            <li><a href="#contact" class="hover:text-white transition">Kontak</a></li>
                        </ul>
                    </div>
                </div>    <!-- Contact Section -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Kontak Kami</h3>
                    <p class="text-gray-400 mb-2">Email: support@akom.dev</p>
                    <p class="text-gray-400 mb-2">Telepon: +62 851-5534-4667</p>
                    <p class="text-gray-400">Alamat: Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60117</p>    </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <div class="flex justify-between space-x-6">
                <p class="mb-4">&copy; 2025 AKOM IT Developer. All rights reserved.</p>

                <a href="https://www.instagram.com/akom.dev/" class="hover:text-white transition"><i class="fab fa-instagram text-white"></i> Instagram</a>    </div>
            </div>
        </div>
    </footer>
    
      <!-- Script untuk toggle menu mobile -->
      <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
        });
      </script>
    </body>
    </html>
    