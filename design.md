# Jaden Luxury - Web Architecture & Design Document

## 1. Tech Stack & Technologies Needed
Untuk membuat website yang sangat dinamis, profesional, dan interaktif menggunakan base **Laravel** dan **Tailwind CSS**, berikut adalah teknologi tambahan yang sangat direkomendasikan:

### Frontend & Interaktivitas (The TALL Stack / Inertia)
- **Alpine.js** atau **Laravel Livewire**: Jika ingin tetap di ekosistem murni Laravel (TALL stack). Ini memungkinkan interaksi dinamis (seperti filter tanpa reload, form validasi real-time) tanpa perlu menulis banyak JavaScript.
- **Inertia.js + Vue 3 / React**: Alternatif yang lebih *powerful* jika Anda menginginkan pengalaman Single Page Application (SPA) penuh yang sangat mulus tanpa mengorbankan SEO dan routing Laravel.
- **GSAP (GreenSock) atau Framer Motion**: Untuk animasi level premium (parallax, reveal on scroll, smooth page transitions) agar tidak terlihat kaku/pasaran.
- **Lenis Smooth Scroll**: Untuk memberikan pengalaman *scrolling* yang mewah (smooth scrolling).

### Backend & Database
- **Database**: MySQL 8.0 atau PostgreSQL.
- **Laravel ORM (Eloquent)**: Untuk manajemen relasi database.
- **Spatie Media Library**: Untuk mengelola aset gambar resolusi tinggi (sangat penting untuk website hotel/villa luxury).

### Design Aesthetics (Modern Minimalis & Luxury)
- **Typography**: Gunakan perpaduan font serif elegan untuk Heading (misal: *Playfair Display*, *Cinzel*, atau *Cormorant Garamond*) dan sans-serif bersih untuk Body (misal: *Inter*, *Outfit*, atau *DM Sans*).
- **Color Palette**: Warna netral (Beige, Warm White, Charcoal, Muted Gold/Bronze) untuk menonjolkan foto villa yang vibrant.
- **Layout**: Asimetris, banyak whitespace (ruang kosong), glassmorphism tipis, dan *large imagery* (foto berukuran besar dan tajam).

---

## 2. Struktur Halaman (4 Pages Utama)

### Page 1: Landing Page (Profile & Showcase)
- **Fungsi**: Halaman pertama yang menyambut pengunjung, membangun *brand image* luxury, dan memberikan profil singkat "Jaden Luxury".
- **Konten**: 
  - Hero Section (Video/Gambar full-screen dengan micro-animasi dan Call to Action).
  - Profil Singkat Jaden Luxury (Visi & Eksklusivitas).
  - Highlight Villa Unggulan (Carousel elegan).
  - Testimonial premium.
  - Footer dengan link sosial media dan navigasi.

### Page 2: Explore Villas (Listing Page)
- **Fungsi**: Katalog untuk menampilkan seluruh pilihan villa yang tersedia di Bali.
- **Konten**:
  - Filter Dinamis (berdasarkan lokasi seperti Seminyak/Ubud, harga, kapasitas, fasilitas).
  - Grid Layout modern dengan efek hover yang halus (menampilkan detail sekilas).
  - Pagination atau Infinite Scroll tanpa reload (menggunakan Livewire/Inertia).

### Page 3: Villa Detail (Single Page)
- **Fungsi**: Menampilkan informasi komprehensif tentang satu villa spesifik untuk meyakinkan pengunjung melakukan booking.
- **Konten**:
  - Masonry / Grid Photo Gallery.
  - Deskripsi mendetail dan daftar fasilitas lengkap (ikon mewah).
  - Kalender Ketersediaan (Availability Calendar) secara real-time.
  - Section Booking Form (Pilih tanggal check-in/out dan jumlah tamu).

### Page 4: Checkout / Booking Confirmation
- **Fungsi**: Halaman transaksi akhir bagi user untuk mengkonfirmasi pesanan dan mengisi data diri.
- **Konten**:
  - Ringkasan Pesanan (Order Summary) di sidebar.
  - Form Data Tamu (Nama, Email, Permintaan Khusus).
  - Integrasi Payment Gateway (misal: Midtrans, Stripe, atau Xendit).
  - Halaman "Booking Success" setelah pembayaran.

---

## 3. Skema Database Sederhana (Core)
- **`users`**: Data pelanggan/admin.
- **`villas`**: Data master villa (nama, deskripsi, harga per malam, kapasitas, lokasi).
- **`villa_images`**: Galeri foto untuk masing-masing villa.
- **`bookings`**: Data reservasi (user_id, villa_id, check_in_date, check_out_date, total_price, status).

---

## 4. Megaprompt (Untuk Digunakan ke AI / LLM)
Anda dapat menyalin prompt di bawah ini ke AI kapan pun Anda ingin memulai tahap coding / generate komponen untuk Jaden Luxury:

```text
Act as a Senior Full-Stack Developer specializing in Laravel 11, Tailwind CSS, and Alpine.js/Livewire (TALL Stack), with a strong background in premium UI/UX design.

I am building a luxury villa/hotel booking website based in Bali called "Jaden Luxury". The design must be modern, minimalist, extremely high-end (not generic/slop), and feature rich micro-animations, plenty of whitespace, and an elegant serif/sans-serif typography pairing.

Project Requirements:
1. Tech Stack: Laravel, Tailwind CSS, Alpine.js (for frontend interactivity), and MySQL.
2. Concept: High-end luxury, utilizing large high-resolution images, subtle hover effects, smooth scrolling, and a muted, elegant color palette (charcoal, beige, gold, white).
3. We have 4 main pages:
   - Landing Page (Hero section, brand profile, featured villas).
   - Villa Listing Page (Dynamic filters for location/price, beautiful grid layout).
   - Villa Detail Page (Masonry gallery, amenities, interactive availability calendar).
   - Checkout/Booking Page (Order summary, guest form, payment integration UI).

Task:
[INSERT YOUR SPECIFIC TASK HERE - e.g., "Generate the Laravel Migrations and Models for the Villas and Bookings table" OR "Create the Tailwind HTML structure for the Hero Section of the Landing Page, ensuring it has a luxury aesthetic."]

Ensure all code follows Laravel best practices, uses semantic HTML, and utilizes Tailwind CSS utility classes effectively for responsive design.
```
