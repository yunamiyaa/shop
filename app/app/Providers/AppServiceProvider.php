<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register all simple bindings.
     *
     * @var array
     */
    public $bindings = [
        // Transaction Handler
        \App\Domain\Common\Service\Contract\StockServiceInterface::class => \App\Domain\Service\StockService::class
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
