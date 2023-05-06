<?php

namespace App\Providers;

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
        //
        if(request()->server('HTTP_ACCEPT_ENCODING') && strpos(request()->server('HTTP_ACCEPT_ENCODING'),
    'gzip') !== false) {
            ob_start("ob_gzhandler");
        }
    }
}
