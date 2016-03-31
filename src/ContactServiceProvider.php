<?php

namespace Abhijeet\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadTranslationsFrom( __DIR__.'/Lang', 'contact');
        $this->loadViewsFrom(__DIR__ . '/Views', 'contact');
        $this->publishes([
            __DIR__.'/Config/contact.php' => config_path('contact.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/Config/contact.php', 'contact');
        $this->mergeConfigFrom( __DIR__.'/Config/packageconfig.php', 'contact');
        $this->app['contact'] = $this->app->share(function($app) {
            return new Contact;
        });
    }
}
