<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cartalyst\Stripe\Laravel\Facades\Stripe as Stripe;
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
        Stripe::setApiKey("sk_test_Cm84G8QIDu318vcp30dzjcTC00vytVLPjH");
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
