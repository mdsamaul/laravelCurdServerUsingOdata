<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Flat3\Lodata\Facades\Lodata;
use App\Models\person;
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
       Lodata::discover(person::class);
    }
}
