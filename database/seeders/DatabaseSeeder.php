<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villas = [
            [
                'name' => 'Villa Azure',
                'slug' => 'villa-azure',
                'description' => 'A beautiful beachfront villa with stunning ocean views.',
                'price_per_night' => 450.00,
                'capacity' => 4,
                'bedrooms' => 2,
                'location' => 'Seminyak',
                'amenities' => json_encode(['Private Pool', 'Ocean View', 'WiFi', 'Chef']),
                'image_url' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&q=80&w=800',
            ],
            [
                'name' => 'Jungle Serenity',
                'slug' => 'jungle-serenity',
                'description' => 'Experience peace in the heart of the jungle with an infinity pool.',
                'price_per_night' => 600.00,
                'capacity' => 6,
                'bedrooms' => 3,
                'location' => 'Ubud',
                'amenities' => json_encode(['Infinity Pool', 'Jungle View', 'Spa', 'Breakfast Included']),
                'image_url' => 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?auto=format&fit=crop&q=80&w=800',
            ],
            [
                'name' => 'The Cliffside',
                'slug' => 'the-cliffside',
                'description' => 'Luxury redefined at the edge of the world. Panoramic views and ultimate privacy.',
                'price_per_night' => 1200.00,
                'capacity' => 10,
                'bedrooms' => 5,
                'location' => 'Canggu',
                'amenities' => json_encode(['Private Beach Access', 'Helipad', 'Butler Service', 'Cinema Room']),
                'image_url' => 'https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?auto=format&fit=crop&q=80&w=1200',
            ],
            [
                'name' => 'Sunset Retreat',
                'slug' => 'sunset-retreat',
                'description' => 'A cozy retreat perfectly positioned to catch the famous Bali sunset.',
                'price_per_night' => 300.00,
                'capacity' => 2,
                'bedrooms' => 1,
                'location' => 'Uluwatu',
                'amenities' => json_encode(['Plunge Pool', 'Ocean View', 'Romantic Setup']),
                'image_url' => 'https://images.unsplash.com/photo-1510798831971-661eb04b3739?auto=format&fit=crop&q=80&w=800',
            ],
            [
                'name' => 'The Ricefield Haven',
                'slug' => 'ricefield-haven',
                'description' => 'Surrounded by lush green rice terraces, perfect for a digital detox.',
                'price_per_night' => 250.00,
                'capacity' => 4,
                'bedrooms' => 2,
                'location' => 'Ubud',
                'amenities' => json_encode(['Yoga Pavilion', 'Organic Garden', 'Bicycles']),
                'image_url' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&q=80&w=800',
            ],
            [
                'name' => 'Villa Oasis',
                'slug' => 'villa-oasis',
                'description' => 'Modern luxury right in the center of the action.',
                'price_per_night' => 500.00,
                'capacity' => 8,
                'bedrooms' => 4,
                'location' => 'Seminyak',
                'amenities' => json_encode(['Large Pool', 'Billiards', 'Walking Distance to Beach']),
                'image_url' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&q=80&w=800',
            ],
        ];

        foreach ($villas as $villa) {
            \App\Models\Villa::create($villa);
        }
    }
}
