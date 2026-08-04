<x-layouts.app>
    <x-slot:title>
        Experiences | Jaden Luxury
    </x-slot>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 bg-charcoal text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=2000" alt="Spa Experience" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-charcoal/80 to-charcoal"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h1 class="font-playfair text-5xl md:text-6xl font-bold tracking-widest uppercase mb-6">Curated Experiences</h1>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg leading-relaxed font-light">
                Elevate your stay with our bespoke services designed to immerse you in the ultimate luxury and authentic Balinese culture.
            </p>
        </div>
    </div>

    <!-- Experiences List -->
    <div class="bg-[#FDFCF0] py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24 md:space-y-32">
            
            <!-- Experience 1: Private Chef -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
                <div class="relative group">
                    <div class="overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?auto=format&fit=crop&q=80&w=1000" alt="Private Chef" class="w-full h-[400px] md:h-[500px] object-cover transition duration-700 group-hover:scale-[1.02]">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-muted-gold/10 hidden md:block -z-10"></div>
                </div>
                <div>
                    <div class="text-muted-gold font-medium tracking-widest uppercase text-sm mb-4">Culinary Excellence</div>
                    <h2 class="font-playfair text-4xl text-charcoal font-bold tracking-wider uppercase mb-6">Private In-Villa Chef</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Experience world-class dining without leaving the comfort of your villa. Our private chefs craft personalized menus using the freshest local ingredients, from authentic Balinese feasts to international haute cuisine.
                    </p>
                    <ul class="space-y-4 mb-8 text-gray-600">
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Customizable menus for any dietary requirement
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Interactive cooking masterclasses
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Romantic candlelight dinners by the pool
                        </li>
                    </ul>
                    <a href="/contact" class="inline-block border-b-2 border-charcoal pb-1 text-charcoal font-medium uppercase tracking-widest hover:text-muted-gold hover:border-muted-gold transition duration-300">
                        Inquire Now
                    </a>
                </div>
            </div>

            <!-- Experience 2: Spa & Wellness (Reversed) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
                <div class="order-2 md:order-1">
                    <div class="text-muted-gold font-medium tracking-widest uppercase text-sm mb-4">Rejuvenation</div>
                    <h2 class="font-playfair text-4xl text-charcoal font-bold tracking-wider uppercase mb-6">Holistic Wellness</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Transform your villa into a private sanctuary of relaxation. Our expert therapists offer a range of traditional Balinese massages, reflexology, and beauty treatments designed to harmonize your body and mind.
                    </p>
                    <ul class="space-y-4 mb-8 text-gray-600">
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Signature Balinese deep tissue massage
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Private sunrise yoga sessions
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Sound healing and meditation
                        </li>
                    </ul>
                    <a href="/contact" class="inline-block border-b-2 border-charcoal pb-1 text-charcoal font-medium uppercase tracking-widest hover:text-muted-gold hover:border-muted-gold transition duration-300">
                        Book a Session
                    </a>
                </div>
                <div class="relative group order-1 md:order-2">
                    <div class="overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&q=80&w=1000" alt="In-Villa Spa" class="w-full h-[400px] md:h-[500px] object-cover transition duration-700 group-hover:scale-[1.02]">
                    </div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-charcoal/5 hidden md:block -z-10"></div>
                </div>
            </div>

            <!-- Experience 3: Excursions -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
                <div class="relative group">
                    <div class="overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&q=80&w=1000" alt="Bali Excursions" class="w-full h-[400px] md:h-[500px] object-cover transition duration-700 group-hover:scale-[1.02]">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-muted-gold/10 hidden md:block -z-10"></div>
                </div>
                <div>
                    <div class="text-muted-gold font-medium tracking-widest uppercase text-sm mb-4">Adventure</div>
                    <h2 class="font-playfair text-4xl text-charcoal font-bold tracking-wider uppercase mb-6">Curated Excursions</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Discover the hidden gems of Bali with our bespoke guided tours. From secluded waterfalls and ancient temples to private yacht charters, we design itineraries tailored to your unique sense of adventure.
                    </p>
                    <ul class="space-y-4 mb-8 text-gray-600">
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Private helicopter tours over volcanoes
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Guided cultural temple walks
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="w-1.5 h-1.5 bg-muted-gold rounded-full block"></span>
                            Exclusive beach club access
                        </li>
                    </ul>
                    <a href="/contact" class="inline-block border-b-2 border-charcoal pb-1 text-charcoal font-medium uppercase tracking-widest hover:text-muted-gold hover:border-muted-gold transition duration-300">
                        Plan Your Trip
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
