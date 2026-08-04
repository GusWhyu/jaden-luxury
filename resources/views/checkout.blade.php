<x-layouts.app>
    <x-slot:title>
        Checkout | Jaden Luxury
    </x-slot>

    <div class="bg-[#FDFCF0] pt-28 pb-16 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4 mb-8">
                <a href="/villa/{{ $villa->id }}" class="text-gray-400 hover:text-charcoal transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </a>
                <h1 class="font-playfair text-3xl text-charcoal font-bold tracking-widest uppercase">Confirm Your Booking</h1>
            </div>

            <div class="flex flex-col-reverse lg:flex-row gap-12">
                
                <!-- Guest Form -->
                <div class="w-full lg:w-2/3">
                    <div class="bg-white p-8 shadow-sm border border-gray-100">
                        <h2 class="font-playfair text-xl text-charcoal font-bold tracking-widest uppercase mb-6 border-b pb-4">Guest Details</h2>
                        
                        <form action="/checkout/{{ $villa->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="check_in" value="{{ $check_in }}">
                            <input type="hidden" name="check_out" value="{{ $check_out }}">
                            <input type="hidden" name="guests" value="{{ $guests }}">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">First Name</label>
                                    <input type="text" name="first_name" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Last Name</label>
                                    <input type="text" name="last_name" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" required>
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Email Address</label>
                                <input type="email" name="guest_email" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" required>
                            </div>

                            <div class="mb-8">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Special Requests</label>
                                <textarea name="special_requests" rows="3" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" placeholder="Let us know if you need airport transfer, dietary requirements, etc."></textarea>
                            </div>

                            <h2 class="font-playfair text-xl text-charcoal font-bold tracking-widest uppercase mb-6 border-b pb-4 mt-12">Payment Method</h2>
                            
                            <div class="space-y-4 mb-8">
                                <label class="flex items-center p-4 border border-gray-200 cursor-pointer hover:border-muted-gold transition bg-[#FDFCF0]">
                                    <input type="radio" name="payment" class="text-muted-gold focus:ring-muted-gold h-4 w-4" checked>
                                    <span class="ml-3 font-medium text-charcoal uppercase tracking-wider text-sm">Credit Card (Stripe)</span>
                                </label>
                                <label class="flex items-center p-4 border border-gray-200 cursor-pointer hover:border-muted-gold transition">
                                    <input type="radio" name="payment" class="text-muted-gold focus:ring-muted-gold h-4 w-4">
                                    <span class="ml-3 font-medium text-charcoal uppercase tracking-wider text-sm">Bank Transfer (Midtrans)</span>
                                </label>
                            </div>

                            <div class="bg-gray-50 p-6 border border-gray-100 mb-8 text-sm text-gray-600">
                                <p class="mb-2"><strong>Cancellation Policy:</strong> Free cancellation up to 14 days before check-in.</p>
                                <p>By confirming this booking, you agree to our Terms of Service and Privacy Policy.</p>
                            </div>

                            <button type="submit" class="w-full bg-charcoal text-white py-4 uppercase tracking-widest font-medium hover:bg-black transition duration-300 text-lg">
                                Confirm & Pay ${{ number_format($total_price, 0) }}
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Order Summary Sidebar -->
                <div class="w-full lg:w-1/3">
                    <div class="bg-white p-6 shadow-sm border border-gray-100 sticky top-28">
                        <div class="flex gap-4 mb-6 pb-6 border-b border-gray-100">
                            <img src="{{ $villa->image_url ?? 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&q=80&w=200' }}" alt="{{ $villa->name }}" class="w-24 h-24 object-cover">
                            <div>
                                <div class="text-xs text-gray-500 uppercase tracking-widest mb-1">{{ $villa->location }}</div>
                                <h3 class="font-playfair text-lg text-charcoal font-bold">{{ $villa->name }}</h3>
                                <div class="text-sm text-gray-500 mt-1">{{ $guests }} Guests &bull; {{ $villa->bedrooms }} Bedrooms</div>
                            </div>
                        </div>

                        <div class="space-y-4 text-sm mb-6 pb-6 border-b border-gray-100">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Check-in</span>
                                <span class="font-medium text-charcoal">{{ $check_in ? \Carbon\Carbon::parse($check_in)->format('M d, Y') : 'Not selected' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Check-out</span>
                                <span class="font-medium text-charcoal">{{ $check_out ? \Carbon\Carbon::parse($check_out)->format('M d, Y') : 'Not selected' }}</span>
                            </div>
                        </div>

                        <h4 class="font-playfair text-lg text-charcoal font-bold uppercase tracking-widest mb-4">Price Details</h4>
                        <div class="space-y-3 text-sm mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">${{ number_format($villa->price_per_night, 0) }} x {{ $nights }} nights</span>
                                <span class="text-charcoal">${{ number_format($total_price, 0) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Service Fee</span>
                                <span class="text-charcoal">$0</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-end border-t border-gray-100 pt-4">
                            <span class="font-bold text-charcoal uppercase tracking-widest">Total</span>
                            <span class="font-playfair text-2xl font-bold text-muted-gold">${{ number_format($total_price, 0) }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>
