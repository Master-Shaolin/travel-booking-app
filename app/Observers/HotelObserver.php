<?php

namespace App\Observers;

use App\Models\Hotel;
use Illuminate\Support\Str;

class HotelObserver
{
    /**
     * Handle the Hotel "saving" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function saving(Hotel $hotel)
    {
        $slug = Str::slug($hotel->name, '-');
        $hotel->slug = strtolower($slug);
    }
}
