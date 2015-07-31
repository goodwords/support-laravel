<?php

namespace Goodwords\Support\Laravel;

use Illuminate\Events\Dispatcher;

class EventServiceProvider
{
    public $app;

    public function register()
    {
        $this->app->singleton('events', function ($app) {
            return (new Dispatcher($app))->setQueueResolver(function () use ($app) {
                return $app->make('Illuminate\Contracts\Queue\Factory');
            });
        });
    }
}
