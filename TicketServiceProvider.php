<?php

namespace Ticket;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class TicketServiceProvider extends ServiceProvider
{

    private string $namespace = 'Ticket\Http\Controllers';

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->loadViewsFrom(__DIR__.'/View','Ticket');
    }

    public function boot()
    {
        $this->defineRoutes();
    }
    private function defineRoutes()
    {
        Route::middleware('web')
            ->prefix('ticket')
            ->namespace($this->namespace)
            ->group(__DIR__.'/routes.php');
    }
}
