<?php

namespace App\Providers;

use App\Models\Activity;
use App\Models\Hotel;
use App\Observers\ActivityObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Observers\HotelObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Hotel::observe(HotelObserver::class);
        Activity::observe(ActivityObserver::class);
    }
}
