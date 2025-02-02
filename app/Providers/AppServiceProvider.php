<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Event;


class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            // Se a variável 'events' já estiver definida na view, não sobrescreve
            if (!isset($view->getData()['events'])) {
                $events = Event::all();
                $view->with('events', $events);
            }
        });
    }

    public function register()
    {
        // Register any application services.
    }
}
