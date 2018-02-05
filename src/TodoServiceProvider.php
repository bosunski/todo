<?php

namespace Bosunski\Todo;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todo');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->make('Bosunski\Todo\Controllers\MainController');
    }
}
