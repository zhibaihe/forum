<?php

namespace Zhibaihe\Forum;

use Illuminate\Support\ServiceProvider;

class ForumServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/main.php', 'zhibaihe.forum.main');
    }

    public function boot()
    {
        require __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/views', 'zhibaihe.forum');

        $this->publishes([
            __DIR__ . '/config' => config_path('zhibaihe/forum'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/zhibaihe/forum'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');
    }
}
