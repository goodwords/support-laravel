<?php

namespace Goodwords\Support\Laravel;

use Illuminate\Container\Container;
use Illuminate\Config\Repository;

class Provider
{
    public static function register($config)
    {
        $app = new Container();
        Container::setInstance($app);

        $app->instance('config', (new Repository($config)));

        $eventServiceProvider = new EventServiceProvider();
        $eventServiceProvider->app = $app;
        $eventServiceProvider->register();

        $filesystemServiceProvider = new FilesystemServiceProvider();
        $filesystemServiceProvider->app = $app;
        $filesystemServiceProvider->register();

        $viewServiceProvider = new ViewServiceProvider();
        $viewServiceProvider->app = $app;
        $viewServiceProvider->register();
    }
}
