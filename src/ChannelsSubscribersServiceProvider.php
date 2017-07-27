<?php

namespace Otpixto\ChannelsSubscribers;

use Illuminate\Support\ServiceProvider;

class ChannelsSubscribersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->publishes([__DIR__.'/config/channels_subscribers.php' => config_path('channels_subscribers.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Otpixto\ChannelsSubscribers\ChannelsSubscribersController');
        $this->loadViewsFrom(__DIR__.'/views', 'channels_subscribers');
    }
}
