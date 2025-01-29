<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Events;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $events = Events::all(); 
            $view->with('events', $events); 
            // Disponibiliza a variável em todas as views
        });
    }

    public function register()
    {
        // Register any application services.
    }
}