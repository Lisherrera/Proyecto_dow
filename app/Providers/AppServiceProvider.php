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
        // Gate::define('',function(Usuario $usuario){
        //     //si se retorna TRUE-->se permite acceso
        //     //si se retorna FALSE-->se cierra puerta, no hay acceso
        //     return $usuario->esAdministrador();
        // });

        // Gate::define('',function(Usuario $usuario){
        //     return $usuario->esEjecutivo();
        // });

        // Gate::define('',function(Usuario $usuario){
        //     return $usuario->esAdministrador() || $usuario->esFuncionario();
        // });
    }
}
