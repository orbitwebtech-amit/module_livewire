<?php

namespace App\Modules\Company\Providers;

use Livewire\Livewire; 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class CompanyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // bindings, singletons, interfaces ↔ implementations અહીં bind કરો
    }

    public function boot(): void
    {
        // 1) Routes
        // $this->registerRoutes();

        // 2) Views (namespace = "modules")
        // $this->loadViewsFrom(resource_path('modules'), 'modules');

        // 3) Translations (namespace = "user")
        // $this->loadTranslationsFrom(resource_path('modules/User/lang'), 'user');

        // 4) Migrations
        $this->loadMigrationsFrom(app_path('Modules/Company/Database/Migrations'));
        //  Livewire::component('company_crud', app\Modules\Company\Livewire\Company\Crud::class);

    }

    protected function registerRoutes(): void
    {
        // web
        // Route::middleware('web')
        //     ->group(app_path('Modules/User/Routes/web.php'));

        // // api
        // Route::prefix('api')
        //     ->middleware('api')
        //     ->group(app_path('Modules/User/Routes/api.php'));
    }
}
