<?php

namespace violator667\backpackpl\src\app\Providers;

use Illuminate\Support\ServiceProvider;

class backpackplServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'violator667');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'violator667');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(__DIR__.'/../../../config/backpackpl.php', 'backpackpl');

        // Register the service the package provides.
        $this->app->singleton('backpackpl', function ($app) {
            return new backpackpl;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['backpackpl'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
//        $this->publishes([
//            __DIR__.'/../config/backpackpl.php' => config_path('backpackpl.php'),
//        ], 'backpackpl.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/violator667'),
        ], 'backpackpl.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/violator667'),
        ], 'backpackpl.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/violator667'),
        ], 'backpackpl.views');*/

        // Registering package commands.
        $this->commands([
            \violator667\backpackpl\app\Console\Commands\Backpackpl::class,
        ]);
    }
}
