<?php

namespace App\Domain\Services;

use App\Domain\Contracts\ICourierAdapterFactory;
use App\Domain\Contracts\IShipmentService;

class ShipmentService implements IShipmentService
{

    public function __construct(private readonly ICourierAdapterFactory $courierAdapterFactory)
    {
    }

    public function sendShipment(array $data)
    {
        $shippingObject = $this->courierAdapterFactory->courierFactory($data['type']);
        return $shippingObject->createShipment($data);
    }

    public function trackShipment(array $data)
    {
        $shippingObject = $this->courierAdapterFactory->courierFactory($data['type']);
        return $shippingObject->GetShipmentTrace($data);
    }
}
