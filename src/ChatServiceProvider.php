<?php

namespace lnnitharsan\Chat;

use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
