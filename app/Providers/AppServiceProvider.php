<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;
use Laravel\Horizon\Horizon;

/**
 * Class AppServiceProvider
 *
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     */
    public function register()
    {
	Cashier::ignoreMigrations();
        Horizon::routeMailNotificationsTo(env('MAIL_FROM_ADDRESS'));
    }
}
