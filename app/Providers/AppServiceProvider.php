<?php

namespace App\Providers;

use App\Models\Params;
use SicoHelpers\Helpers;
use sicoVars\GlobalComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
       // View::share('version', Helpers::version(Session::get('ShalomLangue')));
        // View::composer('*', GlobalComposer::class);

        View::composer('*', function ($view) {
            $view->with(['version'=>Helpers::version(),'params'=>Params::first()]);
        });
    }
}
