<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Villa extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_per_night',
        'capacity',
        'bedrooms',
        'location',
        'amenities',
        'image_url',
    ];

    protected $casts = [
        'amenities' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
