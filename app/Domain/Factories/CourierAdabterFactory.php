<?php

namespace App\Domain\Factories;

use App\Domain\Contracts\ICourierAdabter;
use App\Domain\Contracts\ICourierAdabterFactory;
use App\Domain\Suppliers\Adabter\CourierOneAdabtee;
use App\Domain\Suppliers\Adabter\CourierThreeAdabtee;
use App\Domain\Suppliers\Adabter\CourierTwoAdabtee;
use Exception;

class CourierAdabterFactory implements ICourierAdabterFactory
{
    public function courierFactory(string $type) : ICourierAdabter {
        return match ($type) {
            'courier_one' => new CourierOneAdabtee(),
            'courier_two' => new CourierTwoAdabtee(),
            'courier_three' => new CourierThreeAdabtee(),
            default => throw new Exception(__('404')),
        };
    }
}
