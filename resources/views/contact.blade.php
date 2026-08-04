<x-layouts.app>
    <x-slot:title>
        Contact | Jaden Luxury
    </x-slot>

    <!-- Header Section -->
    <div class="pt-32 pb-16 bg-[#FDFCF0]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-playfair text-4xl md:text-5xl text-charcoal font-bold tracking-widest uppercase mb-6">Get in Touch</h1>
            <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
                Whether you have a question about our villas, want to plan a custom itinerary, or simply say hello, we are here for you.
            </p>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="bg-white py-20 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <!-- Contact Info -->
                <div class="w-full lg:w-1/3">
                    <h2 class="font-playfair text-2xl text-charcoal font-bold tracking-widest uppercase mb-8">Contact Information</h2>
                    
                    <div class="space-y-8 text-gray-600">
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-muted-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <h3 class="font-medium text-charcoal tracking-wide uppercase text-sm mb-1">Our Office</h3>
                                <p class="leading-relaxed">Jl. Kayu Aya No. 10<br>Seminyak, Bali 80361<br>Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-muted-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <h3 class="font-medium text-charcoal tracking-wide uppercase text-sm mb-1">Email Us</h3>
                                <p class="leading-relaxed">concierge@jadenluxury.com<br>info@jadenluxury.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-muted-gold mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <h3 class="font-medium text-charcoal tracking-wide uppercase text-sm mb-1">Call Us</h3>
                                <p class="leading-relaxed">+62 811 2345 6789<br>Mon-Sun: 24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-2/3">
                    <div class="bg-[#FDFCF0] p-8 md:p-12 shadow-sm border border-gray-100">
                        <h2 class="font-playfair text-2xl text-charcoal font-bold tracking-widest uppercase mb-8">Send a Message</h2>
                        
                        <form action="#" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">First Name</label>
                                    <input type="text" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Last Name</label>
                                    <input type="text" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" required>
                                </div>
                            </div>

                            <div class="mb-8">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Email Address</label>
                                <input type="email" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" required>
                            </div>
                            
                            <div class="mb-8">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Subject</label>
                                <select class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition text-sm">
                                    <option value="booking">Villa Booking Inquiry</option>
                                    <option value="concierge">Concierge & Experiences</option>
                                    <option value="events">Weddings & Events</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="mb-10">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Message</label>
                                <textarea rows="4" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-muted-gold text-charcoal bg-transparent transition" placeholder="How can we help you?" required></textarea>
                            </div>

                            <button type="submit" class="bg-charcoal text-white px-10 py-4 uppercase tracking-widest text-sm font-medium hover:bg-black transition duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>
