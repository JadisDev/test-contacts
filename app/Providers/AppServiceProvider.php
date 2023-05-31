<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Interfaces\Repository\RepositoryInterface',
            'App\Repositories\Contact\ContactRepository'
        );

        $this->app->bind(
            'App\Interfaces\Service\Contact\ContactServiceInterface',
            'App\Services\Contact\ContactService'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
