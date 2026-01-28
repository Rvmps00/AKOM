
<x-guest-layout>
    <x-layouts.demo>
         
        <body class="bg-stone-50">
            <!-- Navigation -->
            <nav class="bg-white shadow-lg  w-full z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a href="#" class="text-2xl font-bold text-amber-900">Kopi<span class="text-amber-600">Tah</span></a>
                        </div>
                        
                        <!-- Desktop Menu -->
                        <div class="hidden md:flex items-center space-x-8">
                            <a href="#" class="text-amber-900 hover:text-amber-600 transition">Home</a>
                            <a href="#menu" class="text-amber-900 hover:text-amber-600 transition">Menu</a>
                            <a href="#about" class="text-amber-900 hover:text-amber-600 transition">About</a>
                            <a href="#contact" class="bg-amber-600 text-white px-4 py-2 rounded-full hover:bg-amber-700 transition">Contact</a>
                        </div>
        
                        <!-- Mobile Menu Button -->
                        <button id="mobile-menu-button" class="md:hidden flex items-center">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                            </svg>
                        </button>
                    </div>
                </div>
        
                <!-- Mobile Menu -->
                <div id="mobile-menu" class="md:hidden hidden absolute w-full bg-white shadow-lg">
                    <div class="px-4 py-2 space-y-2">
                        <a href="#" class="block text-amber-900 hover:bg-amber-50 p-2 rounded">Home</a>
                        <a href="#menu" class="block text-amber-900 hover:bg-amber-50 p-2 rounded">Menu</a>
                        <a href="#about" class="block text-amber-900 hover:bg-amber-50 p-2 rounded">About</a>
                        <a href="#contact" class="block bg-amber-600 text-white p-2 rounded">Contact</a>
                    </div>
                </div>
            </nav>
        
            <!-- Hero Section -->
            <section class="relative h-screen flex items-center">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1498804103079-a6351b050096?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-90"></div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
                
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                        Experience the Art of Coffee
                    </h1>
                    <p class="text-lg md:text-xl text-amber-100 mb-8 max-w-2xl mx-auto">
                        Crafted with passion, served with love. Discover our specialty coffees and homemade pastries.
                    </p>
                    <a href="#menu" class="bg-amber-600 text-white px-8 py-3 rounded-full text-lg hover:bg-amber-700 transition">
                        Explore Menu
                    </a>
                </div>
            </section>
        
             <!-- Featured Menu Section -->
    <section id="menu" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-900 mb-4">Our Signature Drinks</h2>
                <p class="text-gray-600 max-w-xl mx-auto">Handcrafted by our expert baristas using premium quality beans</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1582768772255-7fb8066357ce?q=80&w=1402&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         alt="KopiTah Special Blend" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-900 mb-2">Tah Special Blend</h3>
                        <p class="text-gray-600 mb-4">Dark roast with chocolate & caramel notes</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold">IDR 35K</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-full hover:bg-amber-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0FX6zGG2AdgZqrWbK-4vVI90hr2ZAFW32-g&s" 
                         alt="Espresso" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-900 mb-2">Double Espresso</h3>
                        <p class="text-gray-600 mb-4">Strong and aromatic double shot espresso</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold">IDR 28K</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-full hover:bg-amber-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://bcoffeeco.id/cdn/shop/articles/Iced-Hazelnut-Latte-scaled_1445x.webp?v=1661691767" 
                         alt="Latte" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-900 mb-2">Hazelnut Latte</h3>
                        <p class="text-gray-600 mb-4">Creamy latte with homemade hazelnut syrup</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold">IDR 42K</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-full hover:bg-amber-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 -->
                {{-- <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2Farchive%2F9eada0d203bfb580d801b478edd553465c7afb52" 
                         alt="Cold Brew" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-900 mb-2">Tah Cold Brew</h3>
                        <p class="text-gray-600 mb-4">20-hour cold extracted with citrus twist</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600 font-bold">IDR 40K</span>
                            <button class="bg-amber-600 text-white px-4 py-2 rounded-full hover:bg-amber-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- New Menu Category -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-900 mb-4">Sweet Treats</h2>
                <p class="text-gray-600 max-w-xl mx-auto">Perfect companions for your coffee</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <!-- Pastry 1 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1557925923-cd4648e211a0" 
                         alt="Croissant" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-amber-900 mb-1">Almond Croissant</h3>
                        <p class="text-sm text-gray-600 mb-2">Flaky pastry with almond filling</p>
                        <span class="text-amber-600 font-bold">IDR 25K</span>
                    </div>
                </div>

                <!-- Pastry 2 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587" 
                         alt="Cheesecake" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-amber-900 mb-1">New York Cheesecake</h3>
                        <p class="text-sm text-gray-600 mb-2">Classic creamy cheesecake</p>
                        <span class="text-amber-600 font-bold">IDR 35K</span>
                    </div>
                </div>

                <!-- Pastry 3 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1586444248902-2f64eddc13df" 
                         alt="Chocolate Cake" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-amber-900 mb-1">Chocolate Lava</h3>
                        <p class="text-sm text-gray-600 mb-2">Warm molten chocolate center</p>
                        <span class="text-amber-600 font-bold">IDR 38K</span>
                    </div>
                </div>

                <!-- Pastry 4 -->
                <div class="bg-stone-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1611293388250-580b08c4a145" 
                         alt="Macarons" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-amber-900 mb-1">French Macarons</h3>
                        <p class="text-sm text-gray-600 mb-2">Assorted flavors (6 pcs)</p>
                        <span class="text-amber-600 font-bold">IDR 45K</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
            <!-- About Section -->
    <section id="about" class="py-20 bg-amber-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center gap-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" 
                         alt="Coffee Preparation" 
                         class="rounded-lg shadow-lg w-full h-96 object-cover">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-amber-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4">
                        Since 2010, KopiTah has been dedicated to perfecting the coffee craft. Our journey began in a small 
                        roastery in Bali, where we developed our unique slow-roasting technique that brings out the 
                        complex flavors in every bean.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center bg-white p-4 rounded-lg">
                            <svg class="w-8 h-8 text-amber-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="font-bold">Fresh Roasted</p>
                                <p class="text-sm text-gray-600">Daily small-batch roasting</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-white p-4 rounded-lg">
                            <svg class="w-8 h-8 text-amber-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="font-bold">Quality Guarantee</p>
                                <p class="text-sm text-gray-600">Premium grade beans</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1580933073521-dc49ac0d4e6a" 
                             alt="Coffee Beans" 
                             class="w-24 h-24 rounded-full object-cover mr-4 shadow">
                        <div>
                            <p class="font-bold text-amber-900">"Our passion is in every cup"</p>
                            <p class="text-sm text-gray-600">- Head Barista</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
            <!-- Footer -->
            <footer class="bg-amber-900 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="text-xl font-bold mb-4">KopiTah</h3>
                            <p class="text-amber-100">Jalan Raya Coffee No. 123<br>Bali, Indonesia</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-4">Opening Hours</h4>
                            <p class="text-amber-100">Mon-Fri: 7AM - 10PM<br>Sat-Sun: 8AM - 11PM</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="text-amber-100 hover:text-amber-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                <!-- Add other social icons -->
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-amber-800 mt-8 pt-8 text-center text-amber-100">
                        <p>&copy; 2023 KopiTah. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        
            <script>
                // Mobile menu toggle
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
        
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            </script>
        </body>
    </x-layouts.demo>
</x-guest-layout>