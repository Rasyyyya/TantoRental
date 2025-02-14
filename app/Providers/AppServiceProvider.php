<?php

namespace App\Providers;

use App\Models\Booking;
use App\Observers\BookingObserver;
use App\View\Components\AppLayout;
use App\View\Components\Dropdown;
use App\View\Components\NavLink;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Booking::observe(BookingObserver::class);
        Blade::component('app-layout', AppLayout::class);
        Blade::component('nav-link', NavLink::class);
        Blade::component('dropdown', Dropdown::class);
        Blade::component('dropdown-link', 'components.dropdown-link');
    }
}
