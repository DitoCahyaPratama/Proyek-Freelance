<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionsServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        //
    }

    public function boot()
    {
        //Blade directives
        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->role == {$role}) : ?>";
        });

        Blade::directive('endrole', function ($role) {
            return "<?php endif; ?>"; 
        });
    }
}
