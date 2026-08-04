<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Jaden Luxury | Exclusive Bali Villas' }}</title>
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <!-- GSAP for Animations -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    </head>
    <body class="antialiased font-inter bg-[#FDFCF0] text-charcoal flex flex-col min-h-screen">
        <!-- Minimalist Header / Navbar -->
        <header class="fixed w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="font-playfair text-2xl font-bold text-charcoal tracking-wider uppercase">
                            Jaden <span class="text-muted-gold">Luxury</span>
                        </a>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="/" class="text-gray-600 hover:text-muted-gold transition px-3 py-2 text-sm font-medium uppercase tracking-widest">Home</a>
                        <a href="/explore" class="text-gray-600 hover:text-muted-gold transition px-3 py-2 text-sm font-medium uppercase tracking-widest">Explore Villas</a>
                        <a href="/experiences" class="text-gray-600 hover:text-muted-gold transition px-3 py-2 text-sm font-medium uppercase tracking-widest">Experiences</a>
                        <a href="/contact" class="text-gray-600 hover:text-muted-gold transition px-3 py-2 text-sm font-medium uppercase tracking-widest">Contact</a>
                    </nav>
                    <div class="hidden md:flex items-center">
                        <a href="/explore" class="bg-charcoal text-white px-6 py-2.5 text-sm font-medium uppercase tracking-wider hover:bg-black transition duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow pt-20">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-charcoal text-warm-white py-16 mt-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">
                    <div>
                        <h3 class="font-playfair text-2xl font-bold mb-4 tracking-wider uppercase">Jaden <span class="text-muted-gold">Luxury</span></h3>
                        <p class="text-gray-400 text-sm leading-relaxed max-w-xs mx-auto md:mx-0">
                            Experience the ultimate luxury in Bali with our handpicked selection of exclusive villas.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-playfair text-lg mb-4 tracking-wider uppercase text-muted-gold">Quick Links</h4>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="/" class="hover:text-white transition">Our Story</a></li>
                            <li><a href="/explore" class="hover:text-white transition">Villas</a></li>
                            <li><a href="/experiences" class="hover:text-white transition">Experiences</a></li>
                            <li><a href="/contact" class="hover:text-white transition">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-playfair text-lg mb-4 tracking-wider uppercase text-muted-gold">Contact</h4>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li>Seminyak, Bali - Indonesia</li>
                            <li>info@jadenluxury.com</li>
                            <li>+62 812 3456 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-12 pt-8 text-center text-sm text-gray-500 flex flex-col md:flex-row justify-between items-center">
                    <p>&copy; {{ date('Y') }} Jaden Luxury. All rights reserved.</p>
                    <div class="space-x-4 mt-4 md:mt-0 flex">
                        <a href="#" class="hover:text-white transition">Instagram</a>
                        <a href="#" class="hover:text-white transition">Facebook</a>
                    </div>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
