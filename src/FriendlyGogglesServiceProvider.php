<?php

namespace Knownwolfy\FriendlyGoggles;

use Illuminate\Support\ServiceProvider;

class FriendlyGogglesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePublishing();
        $this->configureRoutes();
        $this->configureCommands();
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing() {}

    /**
     * Configure the routes offered by the application.
     *
     * @return void
     */
    protected function configureRoutes() {}

    /**
     * Configure the commands offered by the application.
     *
     * @return void
     */
    protected function configureCommands() {}
}
