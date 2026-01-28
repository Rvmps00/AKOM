    <!DOCTYPE html>
    <html lang="id">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Primary Meta Tags -->
<title>AKOM IT Developer - Mau Bikin Projek IT? Santai, Kami Anak Komputer!</title>
<meta name="title" content="AKOM IT Developer - Mau Bikin Projek IT? Santai, Kami Anak Komputer!">
<meta name="description" content="Anak Komputer (AKOM) adalah software house dan IT developer yang didirikan oleh mahasiswa universitas ternama di Surabaya. Kami menyediakan solusi teknologi seperti management apps, event & ticketing, machine learning, website, mobile app, dan IoT device untuk memajukan teknologi di Indonesia.">
<meta name="keywords" content="Software House, IT Developer, Anak Komputer, AKOM, Mahasiswa Surabaya, Teknologi, Management Apps, Event Ticketing, Machine Learning, Website, Mobile App, IoT">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://akom.dev">
<meta property="og:title" content="AKOM IT Developer - Mau Bikin Projek IT? Santai, Kami Anak Komputer!">
<meta property="og:description" content="Dibentuk pada tahun 2023 oleh mahasiswa dari universitas ternama di Surabaya, AKOM hadir dengan solusi teknologi unggul mulai dari management apps hingga IoT device.">

<!-- Twitter -->
<meta name="twitter:url" content="https://akom.dev/">
<meta name="twitter:title" content="AKOM IT Developer - Mau Bikin Projek IT? Santai, Kami Anak Komputer!">
<meta name="twitter:description" content="Kami dari Anak Komputer (AKOM) siap membantu Anda menciptakan inovasi digital melalui solusi IT terdepan seperti website, mobile app, IoT device, dan banyak lagi.">



      <!-- Icon -->
      <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon_io/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon_io/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon_io/favicon-16x16.png">
      <link rel="manifest" href="/images/favicon_io/site.webmanifest">

      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">

         <!-- Fonts -->
         <link rel="preconnect" href="https://fonts.bunny.net">
         <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])
 
         <!-- Styles -->
         @livewireStyles
         
         
         <!-- Google & Fa Icons -->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Event snippet for Pembelian conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-11108224237/1_YmCJ_awLUaEO2Z6LAp',
      'value': 1.0,
      'currency': 'IDR',
      'transaction_id': ''
  });
</script>

</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11108224237">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11108224237');
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
              <div class="py-1">
                <a href="#hero" class="text-gray-700 hover:text-blue-600 transition">Home</a>
              </div>
              <div class="py-1">
                <a href="#about" class="text-gray-700 hover:text-blue-600 transition">Tentang Kami</a>
              </div>
              <div class="py-1">
                <a href="#kelebihan" class="text-gray-700 hover:text-blue-600 transition">Keunggulan</a>
              </div>
              <div class="py-1">
                <a href="#services" class="text-gray-700 hover:text-blue-600 transition">Layanan</a>
              </div>
              <div class="py-1">
                <a href="#portfolio" class="text-gray-700 hover:text-blue-600 transition">Portfolio</a>
              </div>
              <div class="py-1">
                <a href="#testimonials" class="text-gray-700 hover:text-blue-600 transition">Testimoni</a>
              </div>    <div class="border-2 border-gray-700 hover:border-blue-600 rounded-full px-6 py-1 fill-blue-500">

                <a href="#contact" class="text-gray-700 font-bold hover:text-blue-600  transition">Kontak</a>
              </div>
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
            <div class="border-2 border-gray-700 hover:border-blue-600 rounded-full px-6 py-1 fill-blue-500">

              <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Kontak</a>
            </div>
          </nav>
        </div>
      </header>
    
      <!-- Hero Section -->
      <section id="hero" class="pt-16 bg-gradient-to-br from-blue-600 to-indigo-900 text-white h-screen flex items-center">
        <div class="max-w-4xl mx-auto px-4 text-center animate-fadeInUp">
          <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Mau Bikin Projek IT? Santai, Kami Anak Komputer!</h1>
          <p class="text-xl md:text-2xl mb-8">Solusi terpercaya untuk website, mobile app, dan IoT device.</p>
          <a href="#contact" class="inline-block bg-white text-blue-600 font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
            Hubungi Kami Sekarang
          </a>
        </div>
        
      </section>
    
      <!-- Tentang Kami Section -->
          <section id="about" class="py-20 bg-white"  >
            <div class="max-w-5xl mx-auto px-4">
              <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Tentang AKOM IT Developer</h2>
                <p class="text-gray-700 text-lg">
                  Anak Komputer (AKOM) adalah software house dan IT developer yang didirikan pada tahun 2023 sebagai inisiatif fundraising dan kini telah berevolusi menjadi partner teknologi terpercaya. Dibentuk oleh tim mahasiswa dari universitas ternama di Surabaya, kami memiliki komitmen tinggi untuk memenuhi kebutuhan pasar, memajukan teknologi di Indonesia, dan melatih generasi penerus bangsa agar unggul dalam dunia teknologi. Kami menawarkan solusi lengkap mulai dari pembuatan management apps, event and ticketing systems, hingga penerapan machine learning dalam berbagai proyek. Mau bikin website, mobile app, atau IoT device? Santai, Kami Anak Komputer siap membantu mengubah ide Anda menjadi inovasi digital yang canggih dan kompetitif.
                </p>
              </div>
              <div class="flex flex-wrap justify-center space-x-4 md:space-x-8 space-y-2 md:space-y-2">
                <img src="{{asset('images/tech_stack/html.png')}}" alt="HTML5" class="h-12 md:h-16">
                <img src="{{asset('images/tech_stack/css-3.png')}}" alt="CSS3" class="h-12 md:h-16">
                <img src="{{asset('images/tech_stack/javascript-js-square.svg')}}" alt="JavaScript" class="h-12 md:h-16">
                <img src="{{asset('images/tech_stack/react.svg')}}" alt="React" class="h-12 md:h-16">    
                <img src="{{asset('images/tech_stack/laravel.svg')}}" alt="Laravel" class="h-12 md:h-16">
                <img src="{{asset('images/tech_stack/tensorflow.svg')}}" alt="tensorflow" class="h-12 md:h-16">
                <img src="{{asset('images/tech_stack/tailwind.svg')}}" alt="Tailwind CSS" class="h-12 md:h-16">
                <img src="{{asset('images/tech_stack/python.png')}}" alt="python" class="h-12 md:h-16">
              </div>    
            </div>
          </section>
    
       <!-- Keunggulan Kami Section -->
        <section id="kelebihan" class="py-20 bg-gray-50" >
          <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-12">
          <h2 class="text-3xl font-bold mb-4">Keunggulan Kami</h2>
          <p class="text-gray-700 text-lg">Kami menawarkan berbagai keunggulan yang membuat solusi digital kami semakin sesuai dengan kebutuhan dan budget Anda.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <div class="text-center p-6 border rounded-lg hover:shadow-xl transition">
            <div class="flex justify-center mb-4">
              <span class="material-icons text-4xl text-blue-600">lightbulb</span>
            </div>
            <h3 class="text-xl font-bold mb-2">Inovasi</h3>
            <p class="text-gray-600">Teknologi terkini dan solusi kreatif untuk meningkatkan performa bisnis.</p>
          </div>
          <div class="text-center p-6 border rounded-lg hover:shadow-xl transition">
            <div class="flex justify-center mb-4">
              <span class="material-icons text-4xl text-blue-600">verified</span>
            </div>
            <h3 class="text-xl font-bold mb-2">Profesionalisme</h3>
            <p class="text-gray-600">Layanan yang didukung oleh tim ahli dan berpengalaman.</p>
          </div>
          <div class="text-center p-6 border rounded-lg hover:shadow-xl transition">
            <div class="flex justify-center mb-4">
              <span class="material-icons text-4xl text-blue-600">attach_money</span>
            </div>
            <h3 class="text-xl font-bold mb-2">Harga Modular</h3>
            <p class="text-gray-600">Harga per fitur yang fleksibel, disesuaikan dengan budget dan kebutuhan klien.</p>
          </div>
            </div>
          </div>
        </section>

        
   <!-- Layanan Kami Section -->
<section id="services" class="py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold mb-4">Layanan Kami</h2>
      <p class="text-gray-700 text-lg">Layanan end-to-end untuk mendukung pertumbuhan digital bisnis Anda.</p>
    </div>

    <!-- Kategori Web & Mobile -->
    <div class="mb-12">
      <h3 class="text-2xl font-bold mb-6">Web & Mobile</h3>
      <!-- Grid untuk item yang langsung terlihat (3 item pertama) -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Item 1: Website Development -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Website Development</h3>
          <p class="text-gray-600 mb-4">
            Membuat website responsif dan SEO-friendly yang meningkatkan interaksi pelanggan.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Desain responsif</li>
            <li>SEO Optimization</li>
            <li>E-commerce & CMS</li>
          </ul>
        </div>
        <!-- Item 2: Mobile App Development -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Mobile App Development</h3>
          <p class="text-gray-600 mb-4">
            Aplikasi mobile intuitif untuk platform Android dan iOS dengan performa optimal.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>UI/UX Terbaik</li>
            <li>Integrasi API</li>
            <li>Native & Cross-Platform</li>
          </ul>
        </div>
        <!-- Item 3: Website Company Profile -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Website Company Profile</h3>
          <p class="text-gray-600 mb-4">
            Desain profesional untuk menampilkan portfolio, tim, dan blog perusahaan.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Desain profesional</li>
            <li>Integrasi WhatsApp Business & media sosial</li>
            <li>SEO dasar untuk optimasi Google</li>
          </ul>
        </div>
      </div>
      <!-- Kontainer item tambahan yang disembunyikan -->
      <div id="extraWebMobile" class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-8 hidden">
        <!-- Item 4: Point of Sales (POS) System -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Point of Sales (POS) System</h3>
          <p class="text-gray-600 mb-4">
            Sistem manajemen produk, stok, dan transaksi dengan laporan penjualan.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Manajemen produk, stok, & transaksi</li>
            <li>Laporan penjualan harian/bulanan</li>
            <li>Cetak struk otomatis + integrasi printer</li>
          </ul>
        </div>
        <!-- Item 5: Marketplace Custom -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Marketplace Custom</h3>
          <p class="text-gray-600 mb-4">
            Platform marketplace dengan fitur multi-vendor dan sistem rating & review.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Multi-vendor (seller & buyer)</li>
            <li>Sistem rating & review</li>
            <li>Integrasi pembayaran (QRIS, bank transfer)</li>
          </ul>
        </div>
        <!-- Item 6: Sistem Arsip/Stock Opname -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Sistem Arsip/Stock Opname</h3>
          <p class="text-gray-600 mb-4">
            Sistem pencatatan stok otomatis dengan notifikasi stok hampir habis.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Pencatatan stok otomatis</li>
            <li>Notifikasi stok hampir habis</li>
            <li>Export data ke Excel/PDF</li>
          </ul>
        </div>
        <!-- Item 7: Website dengan Integrasi AI -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Website dengan Integrasi AI</h3>
          <p class="text-gray-600 mb-4">
            Website dengan fitur chatbot customer service dan rekomendasi produk berbasis AI.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Chatbot customer service</li>
            <li>Rekomendasi produk berbasis AI</li>
            <li>Analisis data pelanggan otomatis</li>
          </ul>
        </div>
        <!-- Item 8: Website Event & Ticketing -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Website Event & Ticketing</h3>
          <p class="text-gray-600 mb-4">
            Website untuk event dengan fitur QR code generator dan integrasi pembayaran.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>QR code generator</li>
            <li>Integrasi pembayaran</li>
            <li>Dashboard admin</li>
          </ul>
        </div>
        <!-- Item 9: Website Ujian/Olimpiade -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Website Ujian/Olimpiade</h3>
          <p class="text-gray-600 mb-4">
            Website untuk ujian dengan fitur timer ujian dan random soal.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Timer ujian</li>
            <li>Random soal</li>
            <li>Anti-cheat system</li>
          </ul>
        </div>
        <!-- Item 10: Social Media Management Tools -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Social Media Management Tools</h3>
          <p class="text-gray-600 mb-4">
            Alat manajemen media sosial dengan fitur auto-posting dan analisis engagement.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Auto-posting ke Instagram/Facebook</li>
            <li>Analisis engagement (likes, komentar)</li>
            <li>Konten kalender terintegrasi</li>
          </ul>
        </div>
        <!-- Item 11: Streaming Media Platform -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Streaming Media Platform</h3>
          <p class="text-gray-600 mb-4">
            Platform streaming media dengan fitur live streaming dan video on demand.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Live streaming event/webinar</li>
            <li>Video on demand (VOD) dengan proteksi hak cipta</li>
            <li>Integrasi donasi/payment gateway</li>
          </ul>
        </div>
        <!-- Item 12: LMS (Learning Management System) -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">LMS (Learning Management System)</h3>
          <p class="text-gray-600 mb-4">
            Sistem manajemen pembelajaran dengan fitur kelas online dan quiz otomatis.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Kelas online + upload materi (PDF, video)</li>
            <li>Quiz otomatis & sertifikat digital</li>
            <li>Dashboard progress siswa</li>
          </ul>
        </div>
        <!-- Item 13: HRIS (Human Resource System) -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">HRIS (Human Resource System)</h3>
          <p class="text-gray-600 mb-4">
            Sistem manajemen sumber daya manusia dengan fitur absensi online dan penggajian otomatis.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Absensi online (GPS/QR code)</li>
            <li>Penggajian otomatis + slip gaji digital</li>
            <li>Manajemen cuti & kinerja karyawan</li>
          </ul>
        </div>
      </div>
      <!-- Tombol See More untuk kategori Web & Mobile -->
      <div class="text-center mt-6">
        <button id="toggleWebMobile" class="flex items-center justify-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
          <span class="mr-2">See More</span>
          <!-- Icon Arrow Down -->
          <svg id="iconWebMobile" class="w-5 h-5 fill-current transform transition-transform" viewBox="0 0 20 20">
            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Kategori IoT -->
    <div>
      <h3 class="text-2xl font-bold mb-6">IoT</h3>
      <!-- Grid untuk item yang langsung terlihat (3 item pertama) -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Item 1: IoT Solutions -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">IoT Solutions</h3>
          <p class="text-gray-600 mb-4">
            Solusi IoT terintegrasi untuk memantau dan mengendalikan perangkat secara real-time.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Monitoring Real-Time</li>
            <li>Data Analitik</li>
            <li>Integrasi Cloud</li>
          </ul>
        </div>
        <!-- Item 2: Sistem Check-in Event NFC/RFID -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Sistem Check-in Event NFC/RFID</h3>
          <p class="text-gray-600 mb-4">
            Sistem check-in event menggunakan teknologi NFC/RFID.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Hardware ESP32 dengan sensor NFC/RFID</li>
            <li>Dashboard real-time kehadiran peserta</li>
            <li>Integrasi validasi tiket</li>
          </ul>
        </div>
        <!-- Item 3: Smart Office System -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Smart Office System</h3>
          <p class="text-gray-600 mb-4">
            Sistem kantor pintar untuk kontrol perangkat dan monitoring lingkungan.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Kontrol lampu/AC via smartphone</li>
            <li>Sensor suhu & kelembaban</li>
            <li>Peringatan konsumsi listrik berlebih</li>
          </ul>
        </div>
      </div>
      <!-- Kontainer item tambahan yang disembunyikan -->
      <div id="extraIoT" class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-8 hidden">
        <!-- Item 4: Monitoring Stok Gudang Otomatis -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Monitoring Stok Gudang Otomatis</h3>
          <p class="text-gray-600 mb-4">
            Sistem monitoring stok gudang otomatis dengan sensor.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Sensor berat/ultrasonik untuk tracking stok</li>
            <li>Notifikasi stok menipis via WhatsApp/email</li>
            <li>Integrasi dengan sistem arsip digital</li>
          </ul>
        </div>
        <!-- Item 5: IoT untuk Pertanian Urban -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">IoT untuk Pertanian Urban</h3>
          <p class="text-gray-600 mb-4">
            Solusi IoT untuk pertanian urban dengan sensor dan sistem otomatis.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Sensor kelembaban tanah</li>
            <li>Auto-watering system</li>
            <li>Data logging ke aplikasi mobile</li>
          </ul>
        </div>
        <!-- Item 6: Smart Parking System -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Smart Parking System</h3>
          <p class="text-gray-600 mb-4">
            Sistem parkir pintar dengan sensor dan notifikasi.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Sensor parkir IR/ultrasonik</li>
            <li>Tampilan slot parkir kosong</li>
            <li>Notifikasi reservasi parkir</li>
          </ul>
        </div>
        <!-- Item 7: Smart Queue System -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Smart Queue System</h3>
          <p class="text-gray-600 mb-4">
            Sistem antrian pintar dengan nomor digital.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Antrian digital via SMS/WhatsApp</li>
            <li>Layar tampilan antrian</li>
            <li>Cocok untuk klinik atau loket</li>
          </ul>
        </div>
        <!-- Item 8: Smart Poster Interaktif -->
        <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
          <h3 class="text-2xl font-bold mb-4">Smart Poster Interaktif</h3>
          <p class="text-gray-600 mb-4">
            Poster interaktif dengan NFC tag untuk redirect ke website event.
          </p>
          <ul class="list-disc list-inside text-gray-600">
            <li>Poster dengan NFC tag</li>
            <li>Hitung jumlah tap NFC</li>
            <li>Analisis traffic</li>
          </ul>
        </div>
      </div>
      <!-- Tombol See More untuk kategori IoT -->
      <div class="text-center mt-6">
        <button id="toggleIoT" class="flex items-center justify-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
          <span class="mr-2">See More</span>
          <!-- Icon Arrow Down -->
          <svg id="iconIoT" class="w-5 h-5 fill-current transform transition-transform" viewBox="0 0 20 20">
            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>
    
      <!-- Portfolio / Proyek Unggulan Section -->
      <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Proyek Unggulan</h2>
            <p class="text-gray-700 text-lg">
              Beberapa karya unggulan yang telah kami kembangkan untuk klien kami.
            </p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
           <!-- Proyek 1 -->
<div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-2xl transition">
  <img src="{{asset('images/kopitah.png')}}" alt="KopiTah - eCommerce Coffee Shop" class="w-full">
  <div class="p-6">
    <h3 class="text-xl font-bold mb-2">KopiTah - eCommerce Coffee Shop</h3>
    <p class="text-gray-600">Sistem eCommerce yang menghadirkan pengalaman seamless untuk pemesanan kopi, reservasi meja, dan eksplorasi menu digital.</p>
  </div>
</div>

<!-- Proyek 2 -->
<div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-2xl transition">
  <img src="{{asset('images/neonpos.png')}}" alt="NeonPOS - Sistem POS Terintegrasi" class="w-full">
  <div class="p-6">
    <h3 class="text-xl font-bold mb-2">NeonPOS - Sistem POS Terintegrasi</h3>
    <p class="text-gray-600">Solusi Point of Sale modern dengan dukungan pembayaran QRIS dan transaksi tunai, dirancang untuk meningkatkan efisiensi bisnis.</p>
  </div>
</div>

<!-- Proyek 3 -->
<div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-2xl transition">
  <img src="{{asset('images/event.png')}}" alt="EventPro - Platform Tiketing & Booking" class="w-full">
  <div class="p-6">
    <h3 class="text-xl font-bold mb-2">EventPro - Platform Tiketing & Booking</h3>
    <p class="text-gray-600">Sistem canggih untuk manajemen tiket dan reservasi venue, memastikan pengalaman pengguna yang praktis dan efisien.</p>
  </div>
</div>

<!-- Proyek 4 -->
<div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-2xl transition">
  <img src="{{asset('images/parkir.png')}}" alt="ParkingSystem - Monitoring Parkir IoT" class="w-full">
  <div class="p-6">
    <h3 class="text-xl font-bold mb-2">ParkingSystem - Monitoring Parkir IoT</h3>
    <p class="text-gray-600">Platform berbasis IoT yang memberikan visibilitas real-time terhadap ketersediaan tempat parkir, meningkatkan efisiensi lahan dan kenyamanan pengguna.</p>
  </div>
</div>

<!-- Proyek 5 -->
<div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-2xl transition">
  <img src="{{asset('images/exampro.png')}}" alt="ExamPro - Ujian Online Anti-Cheating" class="w-full">
  <div class="p-6">
    <h3 class="text-xl font-bold mb-2">ExamPro - Ujian Online Anti-Cheating</h3>
    <p class="text-gray-600">Sistem ujian berbasis digital dengan teknologi anti-kecurangan untuk memastikan integritas dan keadilan dalam proses evaluasi.</p>
  </div>
</div>

<!-- Proyek 6 -->
<div class="bg-gray-100 rounded-lg overflow-hidden shadow hover:shadow-2xl transition">
  <img src="{{asset('images/panca.png')}}" alt="DeteksiPanca - AI Deteksi Hama Pisang" class="w-full">
  <div class="p-6">
    <h3 class="text-xl font-bold mb-2">DeteksiPanca - AI Deteksi Hama Pisang</h3>
    <p class="text-gray-600">Aplikasi berbasis kecerdasan buatan untuk identifikasi dini penyakit dan hama tanaman pisang, dikembangkan bersama Kemendikbudristek dan Pemkab Ngada.</p>
  </div>
</div>

          </div>
        </div>
      </section>
    
      <!-- Testimoni Section -->
      <section id="testimonials" class="py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Apa Kata Mereka?</h2>
          </div>
          <div class="space-y-10">
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
              <p class="text-gray-600 italic mb-4">
                "Berkat AKOM IT Developer, website bisnis kami kini jauh lebih profesional dan responsif. Prosesnya cepat dan hasilnya memuaskan."
              </p>
              <p class="font-bold text-gray-800">- Budi Santoso, CEO PT. Digi Kreativaz</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-2xl transition">
              <p class="text-gray-600 italic mb-4">
                "Tim AKOM benar-benar memahami kebutuhan kami. Aplikasi mobile yang mereka kembangkan meningkatkan interaksi pelanggan secara signifikan."
              </p>
              <p class="font-bold text-gray-800">- Siti Rahma, Founder Start-Up X-selent Young </p>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Proses Kerja Section -->
      <section id="process" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Bagaimana Kami Bekerja</h2>
            <p class="text-gray-700 text-lg">
              Proses kerja kami yang terstruktur dan transparan memastikan setiap proyek berjalan dengan sempurna.
            </p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-6 text-center">
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 text-xl font-bold">1</div>
              <h4 class="font-semibold mb-2">Konsultasi Awal</h4>
              <p class="text-gray-600 text-sm">Memahami kebutuhan bisnis Anda.</p>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 text-xl font-bold">2</div>
              <h4 class="font-semibold mb-2">Desain & Perencanaan</h4>
              <p class="text-gray-600 text-sm">Strategi dan rancangan solusi.</p>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 text-xl font-bold">3</div>
              <h4 class="font-semibold mb-2">Pengembangan</h4>
              <p class="text-gray-600 text-sm">Implementasi teknologi terbaru.</p>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 text-xl font-bold">4</div>
              <h4 class="font-semibold mb-2">Pengujian</h4>
              <p class="text-gray-600 text-sm">Uji coba menyeluruh.</p>
            </div>
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 text-xl font-bold">5</div>
              <h4 class="font-semibold mb-2">Dukungan</h4>
              <p class="text-gray-600 text-sm">Layanan purna jual.</p>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Hubungi Kami / CTA Section -->
      <section id="contact" class="py-20 bg-gradient-to-br from-blue-600 to-indigo-600 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
          <h2 class="text-3xl font-bold mb-4">Siap Mulai Proyek IT Anda?</h2>
          <p class="mb-8 text-lg">
            Hubungi kami untuk konsultasi gratis dan solusi digital terbaik untuk bisnis Anda.
          </p>

             <!-- Progress Indicator (4 langkah) -->
      <div id="progressIndicator" class="flex items-center justify-between mb-8">
        <div class="flex flex-col items-center">
          <div id="indicator-0" class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">1</div>
          <span class="mt-2 text-sm">Pilihan</span>
        </div>
        <div class="flex-1 h-1 bg-gray-300 mx-2" id="line-0"></div>
        <div class="flex flex-col items-center">
          <div id="indicator-1" class="w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">2</div>
          <span class="mt-2 text-sm">Pribadi</span>
        </div>
        <div class="flex-1 h-1 bg-gray-300 mx-2" id="line-1"></div>
        <div class="flex flex-col items-center">
          <div id="indicator-2" class="w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">3</div>
          <span class="mt-2 text-sm">Proyek</span>
        </div>
        <div class="flex-1 h-1 bg-gray-300 mx-2" id="line-2"></div>
        <div class="flex flex-col items-center">
          <div id="indicator-3" class="w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">4</div>
          <span class="mt-2 text-sm">Detail</span>
        </div>
      </div>
      
      <!-- Form Multi-Step -->
      <form action="#" method="POST" id="multiStepForm" class="text-black">
        @csrf

        <!-- STEP 0: Pilihan Konsultasi atau Rancangan -->
        <div class="form-step" id="step-0">
          <p class="text-lg text-white mb-4">
            Apakah Anda masih mau konsultasi terlebih dahulu atau sudah memiliki plan/rancangan proyek?
          </p>
          <div class="flex justify-around">
            <button type="button" class="choice-btn bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-950 transition" data-choice="konsultasi">
              Konsultasi Dulu
            </button>
            <button type="button" class="choice-btn bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition" data-choice="rancangan">
              Sudah Ada Rancangan
            </button>
          </div>
          <!-- Field tersembunyi untuk menyimpan pilihan -->
          <input type="hidden" name="projectStatus" id="projectStatus" value="">
        </div>

        <!-- STEP 1: Informasi Pribadi -->
        <div class="form-step hidden" id="step-1">
          <div class="mb-4">
            <label for="name" class="block text-white font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap Anda" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>
          <div class="mb-4">
            <label for="email" class="block text-white font-semibold mb-2">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email Anda" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>
          <div class="mb-4">
            <label for="phone" class="block text-white font-semibold mb-2">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" placeholder="Masukkan nomor telepon Anda" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>
          <div class="mb-4">
            <label for="company" class="block text-white font-semibold mb-2">Nama Perusahaan (Opsional)</label>
            <input type="text" name="company" id="company" placeholder="Masukkan nama perusahaan Anda" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>
        </div>

        <!-- STEP 2: Detail Proyek -->
        <div class="form-step hidden" id="step-2">
          <div class="mb-4">
            <label for="service" class="block text-white font-semibold mb-2">Jenis Layanan</label>
            <select name="service" id="service" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
              <option value="">Pilih Layanan</option>
              <option value="Website Development">Website Development</option>
              <option value="Mobile App Development">Mobile App Development</option>
              <option value="IoT Solutions">IoT Solutions</option>
              <option value="Kustom / Lainnya">Kustom / Lainnya</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="budget" class="block text-white font-semibold mb-2">Estimasi Budget</label>
            <input type="text" name="budget" id="budget" placeholder="Contoh: Rp5.000.000 - Rp20.000.000" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>
          <div class="mb-4">
            <label for="timeline" class="block text-white font-semibold mb-2">Timeline Proyek</label>
            <input type="text" name="timeline" id="timeline" placeholder="Contoh: 1-3 bulan" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>
        </div>

        <!-- STEP 3: Deskripsi Proyek -->
        <div class="form-step hidden" id="step-3">
          <div class="mb-4">
            <label for="message" class="block text-white font-semibold mb-2">Deskripsi Proyek dan Fitur</label>
            <textarea name="message" id="message" rows="5" placeholder="Jelaskan kebutuhan, tujuan, dan fitur proyek Anda" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition"></textarea>
          </div>
          <!-- Field untuk link referensi (misalnya link Figma) -->
          <div class="mb-4">
            <label for="referenceLink" class="block text-white font-semibold mb-2">Link Referensi (Opsional)</label>
            <input type="url" name="referenceLink" id="referenceLink" placeholder="Masukkan link Figma atau referensi lainnya" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
          </div>

          
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between mt-6">
          <button type="button" id="prevBtn" class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-400 transition hidden">Sebelumnya</button>
          <button type="button" id="nextBtn" class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-950 transition border-[2px] ">Berikutnya</button>
        </div>
      </form>
     

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
                      Anak Komputer (AKOM) adalah software house dan IT developer yang didirikan pada tahun 2023 sebagai inisiatif fundraising dan kini telah berevolusi menjadi partner teknologi terpercaya. 
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
                    <p class="text-gray-400 mb-2">Email: hello@akom.dev</p>
                    <p class="text-gray-400 mb-2">Telepon: +62 851-1716-7316</p>
                    <p class="text-gray-400">Alamat: Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60117</p>    </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <div class="flex justify-between space-x-6">
                <p class="mb-4">&copy; 2025 AKOM IT Developer. All rights reserved.</p>
<div class="flex gap-2" onclick="window.open('https://www.instagram.com/akom.dev/', '_blank')">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
    <path d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z"></path>
  </svg>
  <a href="" class="hover:text-white transition">Instagram</a>
</div>    
</div>    </div>
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


<!-- Script untuk toggling tombol See More -->
<script>
  // Fungsi untuk toggle container extra items
  function setupToggle(toggleBtnId, extraContainerId, iconId) {
    const toggleBtn = document.getElementById(toggleBtnId);
    const extraContainer = document.getElementById(extraContainerId);
    const icon = document.getElementById(iconId);
    
    toggleBtn.addEventListener('click', function() {
      if(extraContainer.classList.contains('hidden')) {
        extraContainer.classList.remove('hidden');
        toggleBtn.querySelector('span').textContent = 'See Less';
        icon.classList.add('rotate-180');
      } else {
        extraContainer.classList.add('hidden');
        toggleBtn.querySelector('span').textContent = 'See More';
        icon.classList.remove('rotate-180');
      }
    });
  }

  // Setup toggle untuk masing-masing kategori
  setupToggle('toggleWebMobile', 'extraWebMobile', 'iconWebMobile');
  setupToggle('toggleIoT', 'extraIoT', 'iconIoT');
</script>



<!-- Script untuk kontak -->
<script>
  // Nomor WhatsApp (format internasional tanpa tanda "+")
  const whatsappNumber = '6285117167316';

  // Ambil elemen-elemen form-step dan tombol navigasi
  const steps = document.querySelectorAll('.form-step');
  const nextBtn = document.getElementById('nextBtn');
  const prevBtn = document.getElementById('prevBtn');
  const form = document.getElementById('multiStepForm');
  let currentStep = 0;

  // Ambil progress indicator (4 langkah)
  const indicators = [
    document.getElementById('indicator-0'),
    document.getElementById('indicator-1'),
    document.getElementById('indicator-2'),
    document.getElementById('indicator-3')
  ];
  const lines = [
    document.getElementById('line-0'),
    document.getElementById('line-1'),
    document.getElementById('line-2')
  ];

  // Fungsi update indikator progres
  function updateProgressIndicator(step) {
    indicators.forEach((indicator, index) => {
      if(index <= step) {
        indicator.classList.remove('bg-gray-300', 'text-gray-600');
        indicator.classList.add('bg-lime-500', 'text-white');
      } else {
        indicator.classList.remove('bg-lime-500', 'text-white');
        indicator.classList.add('bg-gray-300', 'text-gray-600');
      }
    });
    lines.forEach((line, index) => {
      if(index < step) {
        line.classList.remove('bg-gray-300');
        line.classList.add('bg-lime-500');
      } else {
        line.classList.remove('bg-lime-500');
        line.classList.add('bg-gray-300');
      }
    });
  }

  // Fungsi untuk menampilkan langkah form sesuai index
  function showStep(step) {
    steps.forEach((el, index) => {
      if(index === step) {
        el.classList.remove('hidden');
        el.classList.add('fade-enter');
        setTimeout(() => {
          el.classList.remove('fade-enter');
        }, 100);
      } else {
        el.classList.add('hidden');
      }
    });
    // Atur visibilitas tombol navigasi:
    // Pada langkah 0, sembunyikan tombol "Berikutnya" karena pilihan akan langsung memicu navigasi
    if(step === 0) {
      prevBtn.classList.add('hidden');
      nextBtn.classList.add('hidden');
    } else {
      prevBtn.classList.remove('hidden');
      nextBtn.classList.remove('hidden');
    }
    // Ubah teks dan style tombol jika di langkah terakhir
    if(step === steps.length - 1) {
      nextBtn.textContent = 'Kirim via WhatsApp';
      nextBtn.classList.remove('bg-blue-900', 'hover:bg-blue-950');
      nextBtn.classList.add('bg-green-500', 'hover:bg-green-600');
    } else {
      nextBtn.textContent = 'Berikutnya';
      nextBtn.classList.remove('bg-green-500', 'hover:bg-green-600');
      nextBtn.classList.add('bg-blue-900', 'hover:bg-blue-950');
    }
    updateProgressIndicator(step);
  }

  // Event listener untuk tombol pilihan di step 0
  const choiceButtons = document.querySelectorAll('.choice-btn');
  choiceButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const choice = this.getAttribute('data-choice');
      document.getElementById('projectStatus').value = choice;
      // Setelah memilih, langsung lanjut ke langkah selanjutnya
      currentStep = 1;
      showStep(currentStep);
    });
  });

  // Event listener untuk tombol "Berikutnya"
  nextBtn.addEventListener('click', function() {
    if(currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
    } else {
      // Jika di langkah terakhir, kumpulkan data dan kirim via WhatsApp
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const company = document.getElementById('company').value;
      const projectStatus = document.getElementById('projectStatus').value;
      const service = document.getElementById('service').value;
      const budget = document.getElementById('budget').value;
      const timeline = document.getElementById('timeline').value;
      const messageText = document.getElementById('message').value;
      const referenceLink = document.getElementById('referenceLink').value;

      // Susun pesan yang akan dikirim via WhatsApp
      let message = `Halo, saya ${name}.\n`;
      message += `Email: ${email}\n`;
      message += `Nomor: ${phone}\n`;
      if(company) {
        message += `Perusahaan: ${company}\n`;
      }
      message += `Status: ${projectStatus === 'konsultasi' ? 'Ingin Konsultasi' : 'Sudah Ada Rancangan'}\n`;
      message += `Layanan: ${service}\n`;
      message += `Budget: ${budget}\n`;
      if(timeline) {
        message += `Timeline: ${timeline}\n`;
      }
      message += `\nPesan:\n${messageText}\n`;
      if(referenceLink) {
        message += `\nLink Referensi: ${referenceLink}`;
      }

      // Redirect ke WhatsApp
      const whatsappURL = `https://api.whatsapp.com/send/?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;
      window.open(whatsappURL, '_blank');
    }
  });

  // Event listener untuk tombol "Sebelumnya"
  prevBtn.addEventListener('click', function() {
    if(currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  });

  // Tampilkan langkah pertama saat halaman dimuat
  showStep(currentStep);
</script>
    </body>
    </html>
    