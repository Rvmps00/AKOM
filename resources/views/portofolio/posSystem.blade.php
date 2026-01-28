
<x-guest-layout>
    <x-layouts.demo>
         
        <head>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
            <!-- Heroicons -->
            <script src="https://unpkg.com/@heroicons/v2.0.18/24/outline/index.js"></script>
        </head>
        <body class="bg-gradient-to-br from-gray-900 to-gray-800 min-h-screen font-['Inter']">
            <div class="flex flex-col h-screen">
                <!-- Header -->
                <header class="bg-gradient-to-r from-purple-600 to-blue-500 text-white p-1 shadow-xl">
                    <div class="max-w-7xl mx-auto flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <div class="bg-white/10 p-2 rounded-lg">
                                <svg class="w-8 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div class="grid  grid-cols-2 content-center  place-items-center gap-1 ">
                                <h3 class="text-2xl font-bold">NeonPOS</h3>
                                <p class="text-sm opacity-90">Kasir: <span class="font-semibold">John Doe</span></p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="bg-white/10 px-4  rounded-full flex items-center space-x-2">
                                <svg class="w-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>10:45 AM</span>
                            </div>
                            <button class="bg-white/10 hover:bg-white/20 p-2 rounded-lg transition-all duration-300">
                                <svg class="w-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>
        
                <div class="flex flex-1 overflow-hidden">
                    <!-- Sidebar -->
                    <div class="w-64 bg-gray-800 p-4 space-y-4">
                        <div class="relative">
                            <input type="text" 
                                   placeholder="Cari produk..." 
                                   class="w-full bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
        
                        <div class="space-y-2">
                            <button class="w-full flex items-center space-x-2 bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                <span>Semua Produk</span>
                            </button>
                            <!-- Add more categories -->
                        </div>
        
                        <div class="border-t border-gray-700 pt-4">
                            <h3 class="text-sm font-semibold text-gray-400 mb-2">Kategori Populer</h3>
                            <div class="space-y-2">
                                <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition">
                                    Minuman
                                </button>
                                <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition">
                                    Makanan
                                </button>
                                <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition">
                                    Best Seller
                                </button>
                                <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition">
                                    Paket Hemat
                                </button>
                                <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 rounded-lg transition">
                                    Paket Keluarga
                                </button>
                                <!-- Add more categories -->
                            </div>
                        </div>
                    </div>
        
                    <!-- Main Content -->
                    <div class="flex-1 flex flex-col overflow-hidden">
                        <!-- Products Grid -->
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 p-4 overflow-y-auto">
                            <!-- Product Card -->
                            <div class="bg-gray-800 rounded-xl p-4 hover:bg-gray-700 transition-all cursor-pointer group relative">
                                <div class="absolute inset-0 bg-gradient-to-t from-purple-500/10 to-transparent rounded-xl"></div>
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1588483977150-9c2127ab7bcc?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                         alt="Product" 
                                         class="w-full h-40 object-cover rounded-lg">
                                    <div class="mt-4">
                                        <h3 class="font-semibold text-white">Espresso Double Shot</h3>
                                        <p class="text-sm text-gray-400">Minuman</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-purple-400 font-bold">Rp 35.000</span>
                                            <span class="text-xs bg-green-500/20 text-green-400 px-2 py-1 rounded-full">Stok: 15</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 right-4 bg-purple-600 p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="bg-gray-800 rounded-xl p-4 hover:bg-gray-700 transition-all cursor-pointer group relative">
                                <div class="absolute inset-0 bg-gradient-to-t from-purple-500/10 to-transparent rounded-xl"></div>
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                         alt="Product" 
                                         class="w-full h-40 object-cover rounded-lg">
                                    <div class="mt-4">
                                        <h3 class="font-semibold text-white">Black Tea</h3>
                                        <p class="text-sm text-gray-400">Minuman</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-purple-400 font-bold">Rp 35.000</span>
                                            <span class="text-xs bg-green-500/20 text-green-400 px-2 py-1 rounded-full">Stok: 15</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 right-4 bg-purple-600 p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="bg-gray-800 rounded-xl p-4 hover:bg-gray-700 transition-all cursor-pointer group relative">
                                <div class="absolute inset-0 bg-gradient-to-t from-purple-500/10 to-transparent rounded-xl"></div>
                                <div class="relative">
                                    <img src="https://goodlfe.com/cdn/shop/articles/20241001192423-lfe-20recipe-20cover-20images-20-7.png?v=1729011813&width=800" 
                                         alt="Product" 
                                         class="w-full h-40 object-cover rounded-lg">
                                    <div class="mt-4">
                                        <h3 class="font-semibold text-white">Lemongrass Tea</h3>
                                        <p class="text-sm text-gray-400">Minuman</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-purple-400 font-bold">Rp 35.000</span>
                                            <span class="text-xs bg-green-500/20 text-green-400 px-2 py-1 rounded-full">Stok: 15</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 right-4 bg-purple-600 p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Add more product cards -->
                        </div>
                    </div>
        
                    <!-- Order Panel -->
                    <div class="w-96 bg-gray-800 border-l border-gray-700 flex flex-col">
                        <div class="p-4 border-b border-gray-700">
                            <h2 class="text-xl font-bold text-white">Order #001</h2>
                            <p class="text-sm text-gray-400">12 Items</p>
                        </div>
        
                        <!-- Order Items -->
                        <div class="flex-1 overflow-y-auto p-4 space-y-4">
                            <div class="flex items-center justify-between bg-gray-700 p-3 rounded-lg">
                                <div>
                                    <h4 class="font-medium text-white">Espresso Double Shot</h4>
                                    <p class="text-sm text-gray-400">2 x Rp35.000</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-purple-400 font-bold">Rp70.000</span>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- Add more order items -->
                        </div>
        
                        <!-- Totals -->
                        <div class="p-4 border-t border-gray-700 space-y-4">
                            <div class="space-y-2">
                                <div class="flex justify-between text-gray-300">
                                    <span>Subtotal</span>
                                    <span>Rp350.000</span>
                                </div>
                                <div class="flex justify-between text-gray-300">
                                    <span>PPN (10%)</span>
                                    <span>Rp35.000</span>
                                </div>
                                <div class="flex justify-between text-white font-bold">
                                    <span>Total</span>
                                    <span class="text-purple-400">Rp385.000</span>
                                </div>
                            </div>
        
                            <!-- Payment Methods -->
                            <div class="grid grid-cols-2 gap-2">
                                <button class="p-3 bg-green-600/20 text-green-400 rounded-lg hover:bg-green-600/30 transition flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <span>Cash</span>
                                </button>
                                <button class="p-3 bg-green-600/20 text-green-400 rounded-lg hover:bg-green-600/30 transition flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <span>Qris</span>
                                </button>
                                <!-- Add other payment methods -->
                            </div>
        
                            <!-- Action Buttons -->
                            <div class="grid grid-cols-2 gap-2">
                                <button class="p-3 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition">
                                    Voucher
                                </button>
                                <button class="p-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                                    Process Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <script>
                // Add interactive features here
            </script>
        </body>
        
    </x-layouts.demo>
</x-guest-layout>