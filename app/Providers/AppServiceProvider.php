<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Livewire\Livewire;
use App\Modules\Company\Livewire\Company\Crud;

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
        Schema::defaultStringLength('191');
        $this->loadViewsFrom(resource_path('modules'), 'modules');
        $this->loadViewsFrom(resource_path('modules/Company/views'), 'modules_company_view');
        Livewire::component('company_crud', Crud::class);


    }
}
