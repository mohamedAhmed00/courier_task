<?php

namespace App\Domain\Services;

use App\Domain\Contracts\ICourierAdabterFactory;
use App\Domain\Contracts\IShipmentService;

class ShipmentService implements IShipmentService
{

    public function __construct(private readonly ICourierAdabterFactory $courierAdabterFactory)
    {
    }

    public function sendShipment(array $data)
    {
        $shippingObject = $this->courierAdabterFactory->courierFactory($data['type']);
        return $shippingObject->createShipment($data);
    }

    public function trackShipment(array $data)
    {
        $shippingObject = $this->courierAdabterFactory->courierFactory($data['type']);
        return $shippingObject->GetShipmentTrace($data);
    }
}
