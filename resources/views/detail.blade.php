<x-layouts.app>
    <x-slot:title>
        {{ $villa->name }} | Jaden Luxury
    </x-slot>

    <!-- Hero / Masonry Gallery -->
    <div class="pt-20 bg-[#FDFCF0]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex justify-between items-end mb-6">
                <div>
                    <h1 class="font-playfair text-4xl md:text-5xl text-charcoal font-bold tracking-widest uppercase mb-2">{{ $villa->name }}</h1>
                    <p class="text-gray-500 font-medium tracking-wide uppercase text-sm">{{ $villa->location }}, Bali</p>
                </div>
                <div class="text-right hidden md:block">
                    <p class="text-3xl font-playfair text-charcoal">${{ number_format($villa->price_per_night, 0) }} <span class="text-lg text-gray-500 font-sans">/ night</span></p>
                </div>
            </div>

            <!-- Masonry Grid -->
            <div class="grid grid-cols-4 grid-rows-2 gap-4 h-[60vh]">
                <div class="col-span-2 row-span-2 cursor-pointer relative group">
                    <img src="{{ $villa->image_url ?? 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&q=80&w=1200' }}" alt="Main" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition duration-500"></div>
                </div>
                <div class="col-span-1 row-span-1 cursor-pointer relative group">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=800" alt="Detail 1" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition duration-500"></div>
                </div>
                <div class="col-span-1 row-span-1 cursor-pointer relative group">
                    <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&q=80&w=800" alt="Detail 2" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition duration-500"></div>
                </div>
                <div class="col-span-2 row-span-1 cursor-pointer relative group">
                    <img src="https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=1000" alt="Detail 3" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition duration-500"></div>
                    <div class="absolute bottom-4 right-4 glass-panel px-4 py-2 text-sm font-medium">View All Photos</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex flex-col md:flex-row gap-12">
        
        <!-- Description & Amenities -->
        <div class="w-full md:w-2/3">
            <h2 class="font-playfair text-2xl text-charcoal font-bold tracking-widest uppercase mb-6">About This Villa</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ $villa->description }}
            </p>
            <p class="text-gray-600 leading-relaxed mb-12">
                Wake up to the sound of crashing waves, enjoy a floating breakfast in your private pool, and watch the legendary Bali sunset right from your terrace. Our dedicated staff is here to ensure your stay is nothing short of perfect.
            </p>

            <h2 class="font-playfair text-2xl text-charcoal font-bold tracking-widest uppercase mb-6">Amenities</h2>
            <div class="grid grid-cols-2 gap-y-4 gap-x-8 text-gray-600">
                @php
                    $amenitiesList = is_string($villa->amenities) ? json_decode($villa->amenities, true) : $villa->amenities;
                    // Handle potential double-encoding where decoding a string returns another string
                    if (is_string($amenitiesList)) {
                        $amenitiesList = json_decode($amenitiesList, true);
                    }
                @endphp
                @if(is_array($amenitiesList) && count($amenitiesList) > 0)
                    @foreach($amenitiesList as $amenity)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-muted-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            {{ $amenity }}
                        </div>
                    @endforeach
                @else
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-muted-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Standard Amenities
                    </div>
                @endif
            </div>
        </div>

        <!-- Booking Widget -->
        <div class="w-full md:w-1/3">
            <div class="glass-panel p-8 sticky top-28 bg-white border border-gray-100 shadow-2xl"
                 x-data="{
                     pricePerNight: {{ $villa->price_per_night }},
                     checkIn: '',
                     checkOut: '',
                     get nights() {
                         if(!this.checkIn || !this.checkOut) return 0;
                         const start = new Date(this.checkIn);
                         const end = new Date(this.checkOut);
                         const diff = end - start;
                         return diff > 0 ? diff / (1000 * 60 * 60 * 24) : 0;
                     },
                     get totalPrice() {
                         return this.nights * this.pricePerNight;
                     }
                 }">
                <div class="text-2xl font-playfair text-charcoal mb-6 border-b pb-4">${{ number_format($villa->price_per_night, 0) }} <span class="text-sm font-sans text-gray-500">/ night</span></div>
                
                <form action="/checkout/{{ $villa->id }}" method="GET">
                    <div class="mb-4">
                        <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Check In</label>
                        <input type="date" name="check_in" x-model="checkIn" class="w-full border border-gray-200 py-2 px-3 focus:outline-none focus:border-muted-gold text-sm text-charcoal" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Check Out</label>
                        <input type="date" name="check_out" x-model="checkOut" class="w-full border border-gray-200 py-2 px-3 focus:outline-none focus:border-muted-gold text-sm text-charcoal" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Guests</label>
                        <select name="guests" class="w-full border border-gray-200 py-2 px-3 focus:outline-none focus:border-muted-gold text-sm text-charcoal">
                            <option value="1">1 Guest</option>
                            <option value="2" selected>2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                        </select>
                    </div>

                    <div x-show="nights > 0" class="mb-6 pt-4 border-t border-gray-100 flex justify-between font-playfair text-charcoal text-lg" style="display: none;">
                        <span>Total (<span x-text="nights"></span> nights)</span>
                        <span>$<span x-text="totalPrice.toLocaleString()"></span></span>
                    </div>

                    <button type="submit" class="w-full bg-charcoal text-white py-4 uppercase tracking-widest font-medium hover:bg-black transition duration-300">
                        Reserve Now
                    </button>
                    
                    <p class="text-center text-xs text-gray-400 mt-4">You won't be charged yet.</p>
                </form>
            </div>
        </div>

    </div>
</x-layouts.app>
