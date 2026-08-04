<x-layouts.app>
    <x-slot:title>
        Booking Confirmed | Jaden Luxury
    </x-slot>

    <div class="bg-[#FDFCF0] min-h-screen pt-32 pb-16 flex items-center justify-center">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            
            <h1 class="font-playfair text-3xl md:text-4xl text-charcoal font-bold tracking-widest uppercase mb-4">Booking Confirmed</h1>
            
            <p class="text-gray-600 mb-8 leading-relaxed">
                Thank you for your payment. Your reservation for <strong class="text-charcoal font-medium">{{ $villa->name }}</strong> has been successfully confirmed. We have sent the receipt and booking details to your email address.
            </p>

            <div class="bg-white p-6 md:p-8 border border-gray-100 shadow-sm mb-8 text-left">
                <h3 class="font-playfair text-lg text-charcoal font-bold uppercase tracking-widest border-b pb-4 mb-4">Booking Summary</h3>
                <div class="space-y-4 text-sm text-gray-600">
                    <div class="flex justify-between">
                        <span>Check-in</span>
                        <span class="font-medium text-charcoal">{{ \Carbon\Carbon::parse($booking->check_in_date)->format('M d, Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Check-out</span>
                        <span class="font-medium text-charcoal">{{ \Carbon\Carbon::parse($booking->check_out_date)->format('M d, Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Guests</span>
                        <span class="font-medium text-charcoal">{{ $booking->guests }} Guests</span>
                    </div>
                    <div class="flex justify-between items-center border-t border-gray-100 pt-4 mt-2">
                        <span class="uppercase tracking-widest font-bold text-charcoal">Total Paid</span>
                        <span class="font-playfair text-xl font-bold text-muted-gold">${{ number_format($total_price, 0) }}</span>
                    </div>
                </div>
            </div>

            <a href="/" class="inline-block bg-charcoal text-white px-8 py-4 uppercase tracking-widest text-sm font-medium hover:bg-black transition duration-300">
                Return to Homepage
            </a>
        </div>
    </div>
</x-layouts.app>
