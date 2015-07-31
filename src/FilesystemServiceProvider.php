<?php

namespace Goodwords\Support\Laravel;

class FilesystemServiceProvider
{
    public $app;

    public function register()
    {
        $this->registerNativeFilesystem();
    }

    protected function registerNativeFilesystem()
    {
        $this->app->singleton('files', function () {
            return new \Illuminate\Filesystem\Filesystem();
        });
    }
}
