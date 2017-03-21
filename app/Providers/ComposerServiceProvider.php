<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(['front.index', 'front.articles'], 'App\Http\ViewComposers\AsideComposer');
    }

    public function register()
    {
        //
    }
}