
<x-guest-layout>
    <x-layouts.demo>
        <head>
          <script src="https://cdn.tailwindcss.com"></script>
          <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
          <style>
            /* Jika diperlukan, tambahkan custom CSS di sini */
            html {
              scroll-behavior: smooth;
            }
          </style>
        </head>
        <body class="font-['Inter'] bg-gradient-to-br from-gray-900 to-blue-900 min-h-screen text-gray-200">
          
          <!-- Navigation -->
          <nav class="bg-gray-800/60 backdrop-blur-md  top-0 w-full z-50 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                  <div class="bg-blue-500 p-2 rounded-lg shadow-md transition-transform hover:scale-110">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/>
                    </svg>
                  </div>
                  <span class="text-xl font-bold text-white">Surabayan Mall Parking</span>
                </div>
                <div class="text-blue-400">
                  <svg class="w-6 h-6 transition-transform hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                </div>
              </div>
            </div>
          </nav>
        
          <!-- Main Content -->
          <main class="pt-20 pb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              
              <!-- Parking Overview -->
              <section class="bg-gray-800/60 backdrop-blur-lg rounded-2xl p-6 mb-8 shadow-2xl">
                <h2 class="text-2xl font-bold text-white mb-4">Real-time Parking Availability</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                  <div class="bg-blue-500/20 p-4 rounded-xl shadow-md transition-transform hover:scale-105">
                    <div class="text-3xl font-bold text-blue-400">1,234</div>
                    <div class="text-sm text-blue-200">Total Spaces</div>
                  </div>
                  <div class="bg-green-500/20 p-4 rounded-xl shadow-md transition-transform hover:scale-105">
                    <div class="text-3xl font-bold text-green-400">894</div>
                    <div class="text-sm text-green-200">Available Now</div>
                  </div>
                  <div class="bg-yellow-500/20 p-4 rounded-xl shadow-md transition-transform hover:scale-105">
                    <div class="text-3xl font-bold text-yellow-400">315</div>
                    <div class="text-sm text-yellow-200">Reserved</div>
                  </div>
                  <div class="bg-red-500/20 p-4 rounded-xl shadow-md transition-transform hover:scale-105">
                    <div class="text-3xl font-bold text-red-400">25</div>
                    <div class="text-sm text-red-200">Full Capacity</div>
                  </div>
                </div>
        
                <!-- Animated Progress Bar -->
                <div class="relative w-full h-2 bg-gray-700 rounded-full overflow-hidden mb-4">
                  <div class="absolute left-0 top-0 h-full bg-green-500 rounded-full transition-all duration-1000" style="width: 75%;"></div>
                </div>
                
                <div class="flex justify-between text-sm text-gray-300">
                  <span>Available (72%)</span>
                  <span>Occupied (28%)</span>
                </div>
              </section>
        
              <!-- Parking Zones -->
              <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Contoh Zone Card -->
                <div class="bg-gray-800/60 backdrop-blur-lg rounded-2xl p-6 hover:-translate-y-2 transition-all shadow-2xl">
                  <div class="flex justify-between items-start mb-4">
                    <div>
                      <h3 class="text-lg font-bold text-white">VIP Parking</h3>
                      <p class="text-sm text-blue-300">Floor B2 • Section A</p>
                    </div>
                    <span class="bg-blue-500/30 text-blue-400 px-3 py-1 rounded-full text-sm">25% Available</span>
                  </div>
                  <div class="space-y-2">
                    <div class="flex justify-between text-sm text-gray-300">
                      <span>Capacity</span>
                      <span>200 spaces</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-300">
                      <span>Available</span>
                      <span class="text-green-400">50 spaces</span>
                    </div>
                  </div>
                  <!-- Parking Slot Indicators -->
                  <div class="mt-4 grid grid-cols-5 gap-2">
                    @for($i = 0; $i < 15; $i++)
                      <div class="h-8 rounded transition-colors
                        @if($i < 5)
                          bg-green-500/30 hover:bg-green-500/50
                        @elseif($i < 10)
                          bg-yellow-500/30 hover:bg-yellow-500/50
                        @else
                          bg-red-500/30 hover:bg-red-500/50
                        @endif">
                      </div>
                    @endfor
                  </div>
                </div>
        
                <!-- Tambahkan zone card lain sesuai kebutuhan -->
              </section>
        
              <!-- Parking Map -->
              <section class="mt-8 bg-gray-800/60 backdrop-blur-lg rounded-2xl p-6 shadow-2xl">
                <h3 class="text-lg font-bold text-white mb-4">Live Parking Map</h3>
                <div class="grid grid-cols-8 gap-2">
                  @for($i = 0; $i < 48; $i++)
                    <div class="aspect-square rounded-lg transition-transform duration-300 hover:scale-105 text-center
                      @if($i % 6 == 0)
                        bg-red-500/30
                      @elseif($i % 4 == 0)
                        bg-yellow-500/30
                      @else
                        bg-green-500/30
                      @endif">
                      <h1>Spot parking <br>{{$i+1}}</h1>
                    </div>
                  @endfor
                </div>
                <div class="mt-4 flex space-x-4">
                  <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-green-500/30 rounded"></div>
                    <span class="text-sm text-gray-300">Available</span>
                  </div>
                  <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-yellow-500/30 rounded"></div>
                    <span class="text-sm text-gray-300">Reserved</span>
                  </div>
                  <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-red-500/30 rounded"></div>
                    <span class="text-sm text-gray-300">Occupied</span>
                  </div>
                </div>
              </section>
              
            </div>
          </main>
        
          <!-- Footer -->
          <footer class="bg-gray-800/60 backdrop-blur-md border-t border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
              <div class="text-center text-gray-400">
                <p>🚗 Operating Hours: 8:00 AM - 12:00 AM</p>
                <div class="mt-2 flex justify-center space-x-4">
                  <a href="#" class="hover:text-blue-400 transition-colors">Contact Support</a>
                  <a href="#" class="hover:text-blue-400 transition-colors">Parking Rates</a>
                </div>
              </div>
            </div>
          </footer>
        
          <!-- Status Indicator -->
          <div class="fixed bottom-4 left-4 flex items-center space-x-2">
            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            <span class="text-sm text-green-400">Live Update</span>
          </div>
        
        </body>
        </html>
        
    </x-layouts.demo>
</x-guest-layout>