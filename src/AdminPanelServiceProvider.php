<?php

namespace Antssanjeewa\LaraAdminPanel;

use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings or configurations
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../database/migrations/2024_08_20_000000_create_users_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_users_table.php'),
            ], 'migrations');

            // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'courier');

            // $this->publishes([
            //     __DIR__ . '/../resources/views' => resource_path('views/vendor/courier'),
            // ]);
        }
    }

}
