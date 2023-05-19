<?php

namespace App\Domain\Factories;

use App\Domain\Contracts\ICourierAdapter;
use App\Domain\Contracts\ICourierAdapterFactory;
use App\Domain\Suppliers\Adapter\CourierOneAdaptee;
use App\Domain\Suppliers\Adapter\CourierThreeAdaptee;
use App\Domain\Suppliers\Adapter\CourierTwoAdaptee;
use Exception;

class CourierAdapterFactory implements ICourierAdapterFactory
{
    public function courierFactory(string $type) : ICourierAdapter {
        return match ($type) {
            'courier_one' => new CourierOneAdaptee(),
            'courier_two' => new CourierTwoAdaptee(),
            'courier_three' => new CourierThreeAdaptee(),
            default => throw new Exception(__('404')),
        };
    }
}
