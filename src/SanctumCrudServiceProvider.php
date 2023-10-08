<?php

namespace Nomanur\SanctumCrud;

use Illuminate\Support\ServiceProvider;

class SanctumCrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sanctum-crud');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'sanctum-crud');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->publishes([
            __DIR__.'/Controllers/SanctumCrudController.php' => app_path('Http/Controllers/SanctumCrudController.php'),
        ]);
        $this->publishes([
            __DIR__.'/Controllers/SanctumCrudRoleController.php' => app_path('Http/Controllers/SanctumCrudRoleController.php'),
        ]);
        $this->publishes([
            __DIR__.'/Controllers/SanctumCrudUserRoleController.php' => app_path('Http/Controllers/SanctumCrudUserRoleController.php'),
        ]);
        $this->publishes([
            __DIR__.'/Models/SanctumCrudRole.php.stub' => app_path('Models/Role.php'),
        ]);
        if(! class_exists('RolesTable')){
            $this->publishes([
                __DIR__ . '/../database/migrations/create_roles_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time())) . '_create_roles_table.php'
            ]);
        }
        if(! class_exists('UserRolesTable')){
            $this->publishes([
                __DIR__ . '/../database/migrations/create_user_roles_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time())) . '_create_user_roles_table.php'
            ]);
        }
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('sanctum-crud.php'),
            ], 'sanctum-crud-config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/sanctum-crud'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/sanctum-crud'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/sanctum-crud'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'sanctum-crud');

        // Register the main class to use with the facade
        $this->app->singleton(SanctumCrud::class, function () {
            return new SanctumCrud;
        });
    }
}
