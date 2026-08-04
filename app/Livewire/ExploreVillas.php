<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Villa;

class ExploreVillas extends Component
{
    public $location = '';
    public $maxPrice = 2000;
    public $bedrooms = '';

    // Computed property for villas
    public function getVillasProperty()
    {
        $query = Villa::query();

        if ($this->location !== '') {
            $query->where('location', $this->location);
        }

        if ($this->maxPrice < 2000) {
            $query->where('price_per_night', '<=', $this->maxPrice);
        }

        if ($this->bedrooms !== '') {
            if ($this->bedrooms === '5+') {
                $query->where('bedrooms', '>=', 5);
            } elseif ($this->bedrooms === '3-4') {
                $query->whereBetween('bedrooms', [3, 4]);
            } elseif ($this->bedrooms === '1-2') {
                $query->whereBetween('bedrooms', [1, 2]);
            }
        }

        return $query->get();
    }

    public function render()
    {
        return view('livewire.explore-villas')
            ->layout('components.layouts.app');
    }
}
