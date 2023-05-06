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
        if(request()->server('HTTP_ACCEPT_ENCODING') && str_contains(request()->server('HTTP_ACCEPT_ENCODING'), 'gzip')) {
            ob_start("ob_gzhandler");
        }
    }
}
