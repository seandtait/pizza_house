<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\View\Composers\ReviewComposer;

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
        view()->composer('partial.testimonials', ReviewComposer::class);
    }
}
