<?php

namespace R0bdiabl0\Laravel5Phumbor;

use Config;
use Illuminate\Support\ServiceProvider;

class Laravel5PhumborServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('laravel5-phumbor.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('phumbor', function ($app) {
            return \Thumbor\Url\BuilderFactory::construct(Config::get('laravel5-phumbor.server'), Config::get('laravel5-phumbor.key'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['phumbor'];
    }

}
