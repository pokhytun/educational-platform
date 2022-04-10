<?php

namespace App\Providers;

use App\Http\View\Composers\UserComposer;
use Illuminate\Support\Facades\View;
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
        //
    }


    public function boot()
    {
        View::composer(['admin.user.index', 'admin.user.users', 'admin.user.teachers', 'admin.user.complaints'], UserComposer::class);
    }
}
