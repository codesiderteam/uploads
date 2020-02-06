<?php

namespace Codesider\Providers;

use Illuminate\Support\ServiceProvider;
use Codesider\Services\UploadService;

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

        $this->app->singleton("Upload", function($app) {
            return new UploadService();
        });
    }

    /**
     * load all migration class. 
     * 
     */
    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Publishing config file to cinfig laravel prject.
     * 
     * key as path to package exsit file.
     * value as config path of laravel config filder
     * after array a parametr for name of vendor publish.
     * 
     */
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../../config/upload.php' => config_path('upload.php'),
        ], "codesider-upload-conifg");

        $this->publishes([
            __DIR__.'/../Models/File.php' =>  app_path('Models/File.php'),
        ], "codesider-upload-model");
    }
}
