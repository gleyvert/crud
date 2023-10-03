<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

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
        Paginator::useBootstrapFive();
       // Paginator::useBootstrapFour();
       //el resourceVerbs es para cambiar el nombre de las rutas de la url
       Route::resourceVerbs([
        'create' => 'crear',
        'edit' => 'editar',
    ]);
    }
}
