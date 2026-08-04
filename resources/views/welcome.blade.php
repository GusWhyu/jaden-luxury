<x-layouts.app>
    <x-slot:title>
        Jaden Luxury | The Pinnacle of Tropical Elegance
    </x-slot>

    <!-- 1. HERO SECTION (Parallax) -->
    <div class="relative h-screen flex items-center justify-center overflow-hidden" id="hero-section">
        <!-- Background Image/Video Parallax -->
        <div class="absolute inset-0 z-0 bg-black hero-bg">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&q=80&w=2000" alt="Luxury Villa Background" class="w-full h-[120%] object-cover opacity-70 transform -translate-y-10 hero-img" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/20 to-[#FDFCF0]"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-24">
            <div class="hero-text overflow-hidden mb-4">
                <p class="text-muted-gold tracking-[0.3em] uppercase text-sm font-semibold mb-2">Welcome to Bali</p>
            </div>
            <div class="hero-text overflow-hidden mb-6">
                <h1 class="font-playfair text-5xl md:text-7xl lg:text-8xl text-white font-bold tracking-widest uppercase drop-shadow-2xl">
                    Redefining <span class="text-muted-gold italic font-light">Luxury</span>
                </h1>
            </div>
            <div class="hero-text overflow-hidden mb-12">
                <p class="text-lg md:text-xl text-gray-200 font-light tracking-wide max-w-2xl mx-auto drop-shadow-md">
                    Experience the pinnacle of tropical elegance. Handpicked, exclusive villas designed for the discerning traveler.
                </p>
            </div>
            <div class="hero-cta opacity-0">
                <a href="/explore" class="inline-block bg-white text-charcoal px-10 py-5 uppercase tracking-[0.2em] text-sm font-medium hover:bg-muted-gold hover:text-white transition duration-500 shadow-2xl relative overflow-hidden group">
                    <span class="relative z-10">Discover Our Collection</span>
                    <div class="absolute inset-0 h-full w-0 bg-muted-gold transition-all duration-500 ease-out group-hover:w-full z-0"></div>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10 flex flex-col items-center opacity-70 hero-scroll">
            <span class="text-white text-xs uppercase tracking-[0.2em] mb-2">Scroll</span>
            <div class="w-[1px] h-16 bg-white/30 relative overflow-hidden">
                <div class="w-full h-1/2 bg-white absolute top-0 animate-[scrollDown_2s_ease-in-out_infinite]"></div>
            </div>
        </div>
    </div>

    <!-- 2. THE ART OF LIVING (Philosophy) -->
    <section class="py-32 bg-[#FDFCF0] relative z-20">
        <div class="max-w-4xl mx-auto px-4 text-center gs-reveal">
            <svg class="w-8 h-8 text-muted-gold mx-auto mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 4v16m8-8H4"></path></svg>
            <h2 class="font-playfair text-4xl md:text-5xl text-charcoal font-bold tracking-widest uppercase mb-10 leading-tight">
                The Art of <span class="italic font-light text-muted-gold">Living</span> Well
            </h2>
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-8 font-light">
                At Jaden Luxury, we believe that true luxury is found in the unseen details. From breathtaking cliffside ocean views to serene jungle escapes, every property in our portfolio has been meticulously curated to offer an unparalleled experience.
            </p>
            <p class="text-gray-500 text-md leading-relaxed font-light max-w-2xl mx-auto">
                We don't just offer accommodations; we provide a canvas for your most cherished memories. Welcome to a world where elegance meets the exotic.
            </p>
        </div>
    </section>

    <!-- 3. FEATURED COLLECTION (Asymmetrical Grid) -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 flex flex-col md:flex-row justify-between items-end gs-reveal">
            <div>
                <p class="text-muted-gold tracking-[0.2em] uppercase text-xs font-bold mb-2">Exclusive Properties</p>
                <h2 class="font-playfair text-4xl text-charcoal font-bold tracking-widest uppercase">Featured Collection</h2>
            </div>
            <a href="/explore" class="text-charcoal font-medium uppercase tracking-[0.1em] text-sm border-b border-charcoal pb-1 hover:text-muted-gold hover:border-muted-gold transition mt-6 md:mt-0">View All Villas</a>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                
                <!-- Large Card -->
                <div class="md:col-span-8 group cursor-pointer gs-reveal-up">
                    <div class="relative overflow-hidden mb-6 h-[500px]">
                        <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?auto=format&fit=crop&q=80&w=1200" alt="Villa 1" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-1000 ease-out">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition duration-700"></div>
                        <div class="absolute top-6 left-6 bg-white/90 backdrop-blur px-3 py-1.5 text-xs uppercase tracking-widest font-bold text-charcoal shadow-lg">Canggu</div>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-playfair text-3xl text-charcoal mb-2 group-hover:text-muted-gold transition">The Cliffside Estate</h3>
                            <p class="text-gray-500 text-sm tracking-wide">10 Guests &bull; 5 Bedrooms &bull; Ocean View &bull; Helipad</p>
                        </div>
                        <div class="text-xl font-medium text-charcoal text-right">
                            From $1,200 <span class="block text-xs font-normal text-gray-500 mt-1 uppercase tracking-wider">Per Night</span>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4 flex flex-col gap-8">
                    <!-- Small Card 1 -->
                    <div class="group cursor-pointer gs-reveal-up">
                        <div class="relative overflow-hidden mb-4 h-[200px]">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&q=80&w=800" alt="Villa 2" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-out">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-700"></div>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-2 py-1 text-[10px] uppercase tracking-widest font-bold text-charcoal">Seminyak</div>
                        </div>
                        <h3 class="font-playfair text-xl text-charcoal mb-1 group-hover:text-muted-gold transition">Villa Azure</h3>
                        <div class="text-sm font-medium text-charcoal">From $450 / night</div>
                    </div>

                    <!-- Small Card 2 -->
                    <div class="group cursor-pointer gs-reveal-up">
                        <div class="relative overflow-hidden mb-4 h-[200px]">
                            <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?auto=format&fit=crop&q=80&w=800" alt="Villa 3" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-out">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-700"></div>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-2 py-1 text-[10px] uppercase tracking-widest font-bold text-charcoal">Ubud</div>
                        </div>
                        <h3 class="font-playfair text-xl text-charcoal mb-1 group-hover:text-muted-gold transition">Jungle Serenity</h3>
                        <div class="text-sm font-medium text-charcoal">From $600 / night</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. SIGNATURE EXPERIENCES (Dark Section) -->
    <section class="py-32 bg-charcoal text-warm-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-[url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&q=80&w=1000')] bg-cover bg-center opacity-20 parallax-bg"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-charcoal via-charcoal/90 to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="md:w-1/2 gs-reveal-right">
                <p class="text-muted-gold tracking-[0.2em] uppercase text-xs font-bold mb-4">Beyond Accommodation</p>
                <h2 class="font-playfair text-4xl md:text-6xl font-bold tracking-widest uppercase mb-8 leading-tight">
                    Signature <br><span class="italic font-light text-muted-gold">Experiences</span>
                </h2>
                
                <div class="space-y-10 mt-12">
                    <div class="flex gap-6 items-start group">
                        <div class="w-12 h-12 border border-gray-600 flex items-center justify-center shrink-0 group-hover:border-muted-gold group-hover:text-muted-gold transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl tracking-wider uppercase mb-2">Private Gastronomy</h4>
                            <p class="text-gray-400 font-light text-sm leading-relaxed">Indulge in personalized menus crafted by our executive chefs, served in the privacy of your villa's dining pavilion.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 items-start group">
                        <div class="w-12 h-12 border border-gray-600 flex items-center justify-center shrink-0 group-hover:border-muted-gold group-hover:text-muted-gold transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl tracking-wider uppercase mb-2">Wellness & Spa</h4>
                            <p class="text-gray-400 font-light text-sm leading-relaxed">Rejuvenate your body and soul with traditional Balinese therapies and yoga sessions overlooking the jungle canopy.</p>
                        </div>
                    </div>

                    <div class="flex gap-6 items-start group">
                        <div class="w-12 h-12 border border-gray-600 flex items-center justify-center shrink-0 group-hover:border-muted-gold group-hover:text-muted-gold transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl tracking-wider uppercase mb-2">Curated Excursions</h4>
                            <p class="text-gray-400 font-light text-sm leading-relaxed">Explore the hidden gems of the island with our dedicated concierge, from secluded beaches to ancient temples.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TESTIMONIAL -->
    <section class="py-32 bg-beige relative">
        <div class="max-w-4xl mx-auto px-4 text-center gs-reveal">
            <svg class="w-12 h-12 text-muted-gold/50 mx-auto mb-8" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H8.2c.4-1.8 2-3.2 3.8-3.2h2V8h-4zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-5.8c.4-1.8 2-3.2 3.8-3.2h2V8h-4z"></path></svg>
            <p class="font-playfair text-2xl md:text-4xl text-charcoal leading-snug italic mb-10">
                "Our stay at The Cliffside was nothing short of magical. The attention to detail, the seamless service, and the sheer beauty of the architecture made it a trip of a lifetime."
            </p>
            <p class="text-xs uppercase tracking-[0.2em] text-gray-500 font-bold">Eleanor & James, New York</p>
        </div>
    </section>

    <!-- 6. FINAL CTA -->
    <section class="py-32 bg-[#FDFCF0] border-b border-gray-200">
        <div class="max-w-3xl mx-auto text-center px-4 gs-reveal-up">
            <h2 class="font-playfair text-4xl md:text-5xl text-charcoal font-bold tracking-widest uppercase mb-6">Ready for Paradise?</h2>
            <p class="text-gray-600 mb-10 font-light text-lg">Let us help you plan the perfect escape. Our portfolio of exclusive villas is waiting for you.</p>
            <a href="/explore" class="inline-block bg-charcoal text-white px-12 py-5 uppercase tracking-[0.2em] text-sm font-medium hover:bg-muted-gold transition duration-500 shadow-xl">
                Begin Your Journey
            </a>
        </div>
    </section>

    <!-- STYLES & SCRIPTS FOR ANIMATIONS -->
    <style>
        @keyframes scrollDown {
            0% { transform: translateY(-100%); }
            50% { transform: translateY(100%); }
            100% { transform: translateY(100%); }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Register ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // 1. Hero Animation Timeline
            const tl = gsap.timeline();
            
            tl.fromTo(".hero-bg", { scale: 1.1 }, { scale: 1, duration: 2, ease: "power2.out" })
              .fromTo(".hero-text > *", 
                  { y: 100, opacity: 0 }, 
                  { y: 0, opacity: 1, duration: 1, stagger: 0.2, ease: "power3.out" }, 
                  "-=1.5"
              )
              .to(".hero-cta", { opacity: 1, duration: 1 }, "-=0.5")
              .fromTo(".hero-scroll", { opacity: 0, y: -20 }, { opacity: 0.7, y: 0, duration: 1 }, "-=0.5");

            // Hero Parallax on Scroll
            gsap.to(".hero-img", {
                yPercent: 30,
                ease: "none",
                scrollTrigger: {
                    trigger: "#hero-section",
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });

            // 2. Generic Reveal Animations
            gsap.utils.toArray('.gs-reveal').forEach(function(elem) {
                gsap.fromTo(elem, 
                    { opacity: 0, y: 50 }, 
                    { opacity: 1, y: 0, duration: 1.2, ease: "power2.out", 
                      scrollTrigger: {
                          trigger: elem,
                          start: "top 80%", // triggers when top of elem hits 80% down viewport
                          toggleActions: "play none none reverse"
                      }
                    }
                );
            });

            // 3. Premium Reveal Up (Staggered items with image scale)
            gsap.utils.toArray('.gs-reveal-up').forEach(function(elem) {
                let img = elem.querySelector('img');
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: elem,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    }
                });

                tl.fromTo(elem, 
                    { opacity: 0, y: 80 }, 
                    { opacity: 1, y: 0, duration: 1.8, ease: "expo.out" }
                );
                
                if (img) {
                    tl.fromTo(img,
                        { scale: 1.3 },
                        { scale: 1, duration: 2.2, ease: "power3.out" },
                        "-=1.8"
                    );
                }
            });

            // 4. Reveal Right
            gsap.utils.toArray('.gs-reveal-right').forEach(function(elem) {
                gsap.fromTo(elem, 
                    { opacity: 0, x: -100 }, 
                    { opacity: 1, x: 0, duration: 1.2, ease: "power3.out", 
                      scrollTrigger: {
                          trigger: elem,
                          start: "top 80%",
                          toggleActions: "play none none reverse"
                      }
                    }
                );
            });

            // 5. Parallax Backgrounds inside sections
            gsap.to(".parallax-bg", {
                yPercent: 20,
                ease: "none",
                scrollTrigger: {
                    trigger: ".parallax-bg",
                    start: "top bottom", 
                    end: "bottom top",
                    scrub: true
                }
            });
        });
    </script>
</x-layouts.app>
