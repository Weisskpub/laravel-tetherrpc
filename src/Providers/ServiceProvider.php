<?php

namespace Weisskpub\Tether\Providers;

use Weisskpub\Tether\Client as TetherClient;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');

        $this->publishes([$path => config_path('tetherd.php')], 'config');
        $this->mergeConfigFrom($path, 'tetherd');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAliases();

        $this->registerClient();
    }

    /**
     * Register aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $aliases = [
            'tetherd' => 'Weisskrub\Tether\Client',
        ];

        foreach ($aliases as $key => $aliases) {
            foreach ((array) $aliases as $alias) {
                $this->app->alias($key, $alias);
            }
        }
    }

    /**
     * Register client.
     *
     * @return void
     */
    protected function registerClient()
    {
        $this->app->singleton('tetherd', function ($app) {
            return new TetherClient([
                'scheme' => $app['config']->get('tetherd.scheme', 'http'),
                'host'   => $app['config']->get('tetherd.host', 'localhost'),
                'port'   => $app['config']->get('tetherd.port', 8332),
                'user'   => $app['config']->get('tetherd.user'),
                'pass'   => $app['config']->get('tetherd.password'),
                'ca'     => $app['config']->get('tetherd.ca'),
            ]);
        });
    }
}
