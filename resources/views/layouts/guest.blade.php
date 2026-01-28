<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
       
      
  <!-- Header / Navbar -->
  <header class="bg-white  w-full z-30 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <a href="/#" class="text-2xl font-bold text-blue-600">AKOM IT Developer</a>
        <nav class="hidden md:flex space-x-8">
          <a href="/#hero" class="text-gray-700 hover:text-blue-600 transition">Home</a>
          <a href="/#about" class="text-gray-700 hover:text-blue-600 transition">Tentang Kami</a>
          <a href="/#kelebihan" class="text-gray-700 hover:text-blue-600 transition">Keunggulan</a>
          <a href="/#services" class="text-gray-700 hover:text-blue-600 transition">Layanan</a>
          <a href="/#portfolio" class="text-gray-700 hover:text-blue-600 transition">Portfolio</a>
          <a href="/#testimonials" class="text-gray-700 hover:text-blue-600 transition">Testimoni</a>
          <a href="/#contact" class="text-gray-700 hover:text-blue-600 transition">Kontak</a>
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
        <a href="/#hero" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Home</a>
        <a href="/#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Tentang Kami</a>
        <a href="/#kelebihan" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Keunggulan</a>
        <a href="/#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Layanan</a>
        <a href="/#portfolio" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Portfolio</a>
        <a href="/#testimonials" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Testimoni</a>
        <a href="/#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-200">Kontak</a>
      </nav>
    </div>
  </header>


        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
