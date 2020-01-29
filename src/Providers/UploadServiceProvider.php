<?php

namespace Codesider\Upload\Providers;

use Illuminate\Support\ServiceProvider;

class UploadServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->registerResources();
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../../config/upload.php' => config_path('upload.php'),
        ], "codesider-upload");
    }
}
