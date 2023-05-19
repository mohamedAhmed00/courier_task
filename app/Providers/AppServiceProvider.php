<?php

namespace App\Providers;

use App\Domain\Contracts\ICourierAdapterFactory;
use App\Domain\Contracts\IShipmentService;
use App\Domain\Factories\CourierAdapterFactory;
use App\Domain\Services\ShipmentService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->scoped(IShipmentService::class, ShipmentService::class);
        $this->app->scoped(ICourierAdapterFactory::class, CourierAdapterFactory::class);
    }
}
