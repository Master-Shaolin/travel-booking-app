<?php

namespace App\Observers;

use App\Models\Activity;
use Illuminate\Support\Str;

class ActivityObserver
{
    /**
     * Handle the Activity "saving" event.
     *
     * @param  \App\Models\Activity  $activity
     * @return void
     */
    public function saving(Activity $activity)
    {
        $slug = Str::slug($activity->name, '-');
        $activity->slug = strtolower($slug);
    }
}
