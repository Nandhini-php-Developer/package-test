<?php

namespace laranew\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd(123); // Uncomment for debugging
    
        // Publish the configuration file
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('contactform.php')
        ], 'contactform-config');
    
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'contactform');
    
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
    
}
