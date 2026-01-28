
<x-guest-layout>
    <x-layouts.demo>
    
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Eventify Pro - Next Gen Event Platform</title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        </head>
        <body class="font-['Inter'] bg-gray-900 text-gray-100">
            <!-- Navigation -->
            <nav class=" w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16 items-center">
                        <div class="flex items-center space-x-2">
                            <div class="bg-gradient-to-r from-purple-600 to-blue-500 p-1 rounded-lg">
                                <div class="bg-gray-900 p-1.5 rounded-md">
                                    <svg class="w-6 h-6 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="text-xl font-bold bg-gradient-to-r from-purple-400 to-blue-300 bg-clip-text text-transparent">Eventify Pro</span>
                        </div>
                        
                        <div class="hidden md:flex items-center space-x-8">
                            <a href="#" class="hover:text-purple-400 transition-all flex items-center space-x-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                <span>Home</span>
                            </a>
                            <a href="#" class="hover:text-purple-400 transition-all">Discover</a>
                            <a href="#" class="hover:text-purple-400 transition-all">Organizers</a>
                            <button class="bg-gradient-to-r from-purple-600 to-blue-500 text-white px-6 py-2 rounded-full hover:scale-105 transition-transform">
                                Create Event
                            </button>
                        </div>
        
                        <button id="mobile-menu-button" class="md:hidden flex items-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        
            <!-- Hero Section -->
            <section class="pt-32 pb-24 relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://source.unsplash.com/photos/random')] bg-cover bg-center opacity-20"></div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                    <div class=" flex flex-col text-center" data-aos="fade-up">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-purple-400 to-blue-300 bg-clip-text text-transparent leading-tight">
                            Experience Events<br>
                            <span class="text-2xl md:text-4xl font-medium text-gray-300">Like Never Before</span>
                        </h1>
                        <p class="  text-lg text-gray-400 mb-8 max-w-2xl mx-auto">
                            Discover curated experiences ranging from underground music scenes to exclusive VIP parties.
                        </p>
                        <div class="col max-w-xl mx-auto bg-gray-800/50 backdrop-blur-lg rounded-xl p-1 shadow-2xl">
                            <div class="flex items-center">
                                <input type="text" 
                                       placeholder="Search events, artists, or venues..." 
                                       class="w-full bg-transparent px-6 py-4 focus:outline-none text-gray-100 placeholder-gray-500  rounded-xl">
                                <button class="ml-2 bg-gradient-to-r from-purple-600 to-blue-500 p-4 rounded-xl hover:scale-105 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- Trending Events -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center mb-8" data-aos="fade-up">
                        <h2 class="text-2xl font-bold">Trending Now</h2>
                        <a href="#" class="flex items-center group text-purple-400 hover:text-purple-300">
                            <span>View All</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
        
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Event Card -->
                        <div class="group relative bg-gray-800 rounded-2xl overflow-hidden hover:transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                            <div class="relative h-64">
                                <img src="https://picsum.photos/seed/event/200/300" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
                                <div class="absolute top-4 right-4 flex space-x-2">
                                    <span class="bg-purple-600/80 text-xs px-3 py-1 rounded-full backdrop-blur-sm">Music</span>
                                    <span class="bg-blue-500/80 text-xs px-3 py-1 rounded-full backdrop-blur-sm">VIP Available</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl text-gray-400 font-bold mb-2">Neon Nights Festival</h3>
                                <div class="flex items-center text-gray-400 text-sm mb-4">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>24 Aug 2024 • 8:00 PM</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="flex -space-x-2">
                                            
                                            <img src="https://xsgames.co/randomusers/avatar.php?g=female" 
                                                 class="w-8 h-8 rounded-full border-2 border-gray-800">
                                            <img src="https://xsgames.co/randomusers/avatar.php?g=male" 
                                                 class="w-8 h-8 rounded-full border-2 border-gray-800">
                                           
                                        </div>
                                        <span class="ml-3 text-sm text-gray-400">500+ Going</span>
                                    </div>
                                    <button class="bg-gradient-to-r from-purple-600 to-blue-500 px-5 py-2.5 rounded-lg hover:scale-105 transition-transform">
                                        $99
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="group relative bg-gray-800 rounded-2xl overflow-hidden hover:transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                            <div class="relative h-64">
                                <img src="https://picsum.photos/seed/festival/200/300?grayscale" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
                                <div class="absolute top-4 right-4 flex space-x-2">
                                    <span class="bg-purple-600/80 text-xs px-3 py-1 rounded-full backdrop-blur-sm">Music</span>
                                    <span class="bg-blue-500/80 text-xs px-3 py-1 rounded-full backdrop-blur-sm">VIP Available</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl text-gray-400 font-bold mb-2">Neon Nights Festival</h3>
                                <div class="flex items-center text-gray-400 text-sm mb-4">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>24 Aug 2024 • 8:00 PM</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="flex -space-x-2">
                                            <img src="{{$profilImg[4]}}" 
                                            class="w-8 h-8 rounded-full border-2 border-gray-800">
                                       <img src="{{$profilImg[5]}}" 
                                            class="w-8 h-8 rounded-full border-2 border-gray-800">
                                      
                                        </div>
                                        <span class="ml-3 text-sm text-gray-400">500+ Going</span>
                                    </div>
                                    <button class="bg-gradient-to-r from-purple-600 to-blue-500 px-5 py-2.5 rounded-lg hover:scale-105 transition-transform">
                                        $99
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="group relative bg-gray-800 rounded-2xl overflow-hidden hover:transform hover:-translate-y-2 transition-all duration-300" data-aos="fade-up">
                            <div class="relative h-64">
                                <img src="https://picsum.photos/seed/party/200/300?grayscale" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
                                <div class="absolute top-4 right-4 flex space-x-2">
                                    <span class="bg-purple-600/80 text-xs px-3 py-1 rounded-full backdrop-blur-sm">Music</span>
                                    <span class="bg-blue-500/80 text-xs px-3 py-1 rounded-full backdrop-blur-sm">VIP Available</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl text-gray-400 font-bold mb-2">Neon Nights Festival</h3>
                                <div class="flex items-center text-gray-400 text-sm mb-4">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>24 Aug 2024 • 8:00 PM</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="flex -space-x-2">
                                            <img src="{{$profilImg[3]}}" 
                                                 class="w-8 h-8 rounded-full border-2 border-gray-800">
                                            <img src="{{$profilImg[1]}}" 
                                                 class="w-8 h-8 rounded-full border-2 border-gray-800">
                                            <img src="{{$profilImg[0]}}" 
                                                 class="w-8 h-8 rounded-full border-2 border-gray-800">
                                        </div>
                                        <span class="ml-3 text-sm text-gray-400">500+ Going</span>
                                    </div>
                                    <button class="bg-gradient-to-r from-purple-600 to-blue-500 px-5 py-2.5 rounded-lg hover:scale-105 transition-transform">
                                        $99
                                    </button>
                                </div>
                            </div>
                        </div>
                     
        
                        <!-- More event cards -->
                    </div>
                </div>
            </section>
        
            <!-- Categories -->
            <h2 class="text-2xl font-bold mb-8 text-center text-gray-300" data-aos="fade-up">Explore Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-5">
                <a href="#" class="group relative bg-gray-800 rounded-xl p-6 hover:bg-gray-700/50 transition-all" data-aos="zoom-in">
                    <div class="mb-4 text-purple-400 group-hover:text-purple-300 transition-colors">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                        </svg>
                    </div>
                    <h3 class="text-gray-400 text-center font-semibold mb-1">Concerts</h3>
                    <p class="text-center text-sm text-gray-400">Live Music Experiences</p>
                    <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-500/30 rounded-xl transition-all"></div>
                </a>
                <a href="#" class="group relative bg-gray-800 rounded-xl p-6 hover:bg-gray-700/50 transition-all" data-aos="zoom-in">
                    <div class="mb-4 text-purple-400 group-hover:text-purple-300 transition-colors">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-gray-400 text-center font-semibold mb-1">Workshops</h3>
                    <p class="text-center text-sm text-gray-400">Hands-on Learning</p>
                    <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-500/30 rounded-xl transition-all"></div>
                </a>
                <a href="#" class="group relative bg-gray-800 rounded-xl p-6 hover:bg-gray-700/50 transition-all" data-aos="zoom-in">
                    <div class="mb-4 text-purple-400 group-hover:text-purple-300 transition-colors">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 00-8 0v4a4 4 0 008 0V7zM5 21h14a2 2 0 002-2v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-gray-400 text-center font-semibold mb-1">Conferences</h3>
                    <p class="text-center text-sm text-gray-400">Industry Insights</p>
                    <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-500/30 rounded-xl transition-all"></div>
                </a>
                <a href="#" class="group relative bg-gray-800 rounded-xl p-6 hover:bg-gray-700/50 transition-all" data-aos="zoom-in">
                    <div class="mb-4 text-purple-400 group-hover:text-purple-300 transition-colors">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-gray-400 text-center font-semibold mb-1">Meetups</h3>
                    <p class="text-center text-sm text-gray-400">Networking Events</p>
                    <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-500/30 rounded-xl transition-all"></div>
                </a>
                
            </div>
            </section>
        
            <!-- Footer -->
            <footer class="bg-gray-900/80 backdrop-blur-md border-t border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                        <div class="md:col-span-2">
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="bg-gradient-to-r from-purple-600 to-blue-500 p-1 rounded-lg">
                                    <div class="bg-gray-900 p-1.5 rounded-md">
                                        <svg class="w-6 h-6 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                        </svg>
                                    </div>
                                </div>
                                <span class="text-xl font-bold bg-gradient-to-r from-purple-400 to-blue-300 bg-clip-text text-transparent">Eventify Pro</span>
                            </div>
                            <p class="text-gray-400">Redefining event experiences through innovative technology and curated content.</p>
                        </div>
                        <!-- Footer columns -->
                    </div>
                    <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                        <p>&copy; 2024 Eventify Pro. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        
            <!-- Floating Action Button -->
            <div class="fixed bottom-6 right-6">
                <button class="bg-gradient-to-r from-purple-600 to-blue-500 p-4 rounded-full shadow-2xl hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </button>
            </div>
        
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init({
                    duration: 800,
                    once: true
                });
            </script>
        </body>
    </x-layouts.demo>
</x-guest-layout>