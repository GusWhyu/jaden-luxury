<div>
    <x-slot:title>
        Explore Villas | Jaden Luxury
    </x-slot>

    <!-- Page Header -->
    <div class="bg-[#FDFCF0] pt-24 pb-12 border-b border-gray-200 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center opacity-5"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 gs-reveal">
            <p class="text-muted-gold tracking-[0.2em] uppercase text-xs font-bold mb-4">Curated Portfolio</p>
            <h1 class="font-playfair text-4xl md:text-6xl text-charcoal font-bold tracking-widest uppercase mb-4 drop-shadow-sm">Our Collection</h1>
            <p class="text-gray-500 max-w-2xl mx-auto font-light">Filter and find your perfect luxury escape in Bali.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex flex-col md:flex-row gap-12 relative">
        
        <!-- Sidebar Filters -->
        <aside class="w-full md:w-1/4">
            <div class="glass-panel p-8 sticky top-28 shadow-xl bg-white/90">
                <h3 class="font-playfair text-xl font-bold uppercase tracking-wider mb-8 border-b pb-4 text-charcoal">Filters</h3>
                
                <div class="mb-8">
                    <label class="block text-xs font-medium text-gray-500 mb-3 uppercase tracking-widest">Location</label>
                    <select wire:model.live="location" class="w-full bg-transparent border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal transition text-sm">
                        <option value="">All Locations</option>
                        <option value="Seminyak">Seminyak</option>
                        <option value="Ubud">Ubud</option>
                        <option value="Canggu">Canggu</option>
                        <option value="Uluwatu">Uluwatu</option>
                    </select>
                </div>

                <div class="mb-8">
                    <label class="block text-xs font-medium text-gray-500 mb-3 uppercase tracking-widest">Max Price / Night: $<span x-text="$wire.maxPrice"></span></label>
                    <input type="range" wire:model.live="maxPrice" min="200" max="2000" step="100" class="w-full accent-muted-gold cursor-pointer">
                    <div class="flex justify-between text-[10px] text-gray-400 mt-2 uppercase font-medium tracking-widest">
                        <span>$200</span>
                        <span>$2000+</span>
                    </div>
                </div>

                <div class="mb-8">
                    <label class="block text-xs font-medium text-gray-500 mb-3 uppercase tracking-widest">Bedrooms</label>
                    <div class="flex gap-2">
                        <button wire:click="$set('bedrooms', '1-2')" class="flex-1 py-2 border transition text-sm {{ $bedrooms === '1-2' ? 'border-muted-gold text-muted-gold bg-[#FDFCF0]' : 'border-gray-200 text-gray-500 hover:border-charcoal hover:text-charcoal' }}">1-2</button>
                        <button wire:click="$set('bedrooms', '3-4')" class="flex-1 py-2 border transition text-sm {{ $bedrooms === '3-4' ? 'border-muted-gold text-muted-gold bg-[#FDFCF0]' : 'border-gray-200 text-gray-500 hover:border-charcoal hover:text-charcoal' }}">3-4</button>
                        <button wire:click="$set('bedrooms', '5+')" class="flex-1 py-2 border transition text-sm {{ $bedrooms === '5+' ? 'border-muted-gold text-muted-gold bg-[#FDFCF0]' : 'border-gray-200 text-gray-500 hover:border-charcoal hover:text-charcoal' }}">5+</button>
                    </div>
                    @if($bedrooms !== '')
                        <button wire:click="$set('bedrooms', '')" class="text-xs text-red-400 hover:text-red-600 mt-2 block w-full text-center">Clear Bedroom Filter</button>
                    @endif
                </div>

                <div wire:loading class="w-full text-center py-2">
                    <svg class="animate-spin h-5 w-5 text-muted-gold mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </div>
        </aside>

        <!-- Villa Grid -->
        <main class="w-full md:w-3/4 relative min-h-[600px]">
            <div wire:loading.class="opacity-50 blur-sm pointer-events-none" class="transition-all duration-300">
                @if($this->villas->isEmpty())
                    <div class="text-center py-20 bg-white shadow-sm border border-gray-100">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="font-playfair text-2xl text-charcoal mb-2">No Villas Found</h3>
                        <p class="text-gray-500 font-light text-sm">We couldn't find any properties matching your exact filters. Try adjusting them.</p>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">
                        @foreach($this->villas as $villa)
                            <div class="group cursor-pointer gs-reveal-up" wire:key="villa-{{ $villa->id }}">
                                <a href="/villa/{{ $villa->id }}" class="block">
                                    <div class="relative overflow-hidden mb-5 h-[300px]">
                                        <img src="{{ $villa->image_url }}" alt="{{ $villa->name }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-out">
                                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition duration-700"></div>
                                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-charcoal shadow-sm">{{ $villa->location }}</div>
                                    </div>
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="font-playfair text-2xl text-charcoal group-hover:text-muted-gold transition">{{ $villa->name }}</h3>
                                        <div class="text-xl font-medium text-charcoal">${{ number_format($villa->price_per_night, 0) }} <span class="text-xs font-normal text-gray-500 uppercase tracking-wider block text-right">/ night</span></div>
                                    </div>
                                    <p class="text-gray-500 text-sm font-light">{{ $villa->capacity }} Guests &bull; {{ $villa->bedrooms }} Bedrooms &bull; @if(is_array($villa->amenities) && count($villa->amenities) > 0) {{ $villa->amenities[0] }} @endif</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </main>
    </div>
    
    <script>
        document.addEventListener('livewire:navigated', () => {
            gsap.utils.toArray('.gs-reveal').forEach(function(elem) {
                gsap.fromTo(elem, { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1, ease: "power2.out" });
            });
            gsap.utils.toArray('.gs-reveal-up').forEach(function(elem, i) {
                gsap.fromTo(elem, { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, delay: i * 0.1, ease: "power3.out" });
            });
        });
        
        // Re-run GSAP on Livewire updates
        document.addEventListener('livewire:initialized', () => {
            Livewire.hook('morph.updated', ({ el, component }) => {
                gsap.utils.toArray('.gs-reveal-up').forEach(function(elem, i) {
                    gsap.fromTo(elem, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" });
                });
            });
        });
    </script>
</div>
