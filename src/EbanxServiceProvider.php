<?php

namespace BeeDelivery\Ebanx;

use Illuminate\Support\ServiceProvider;

class EbanxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/ebanx.php', 'ebanx');

        // Register the service the package provides.
        $this->app->singleton('ebanx', function ($app) {
            return new Ebanx;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ebanx.php' => config_path('ebanx.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ebanx'];
    }
}
