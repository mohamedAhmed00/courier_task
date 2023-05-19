<?php

namespace App\Domain\Suppliers\Adapter;

use App\Domain\Contracts\ICourierAdapter;
use App\Domain\Contracts\ICourierThree;
use App\Domain\Suppliers\Integration\CourierThree;

class CourierThreeAdaptee implements ICourierAdapter
{
    private ICourierThree $courier;
    public function __construct()
    {
        $this->courier = new CourierThree();
    }

    public function createShipment(array $data) : array {
        $shipment = $this->courier->createShipmentAndGetWayBill($data);
        $this->courier->registerNumberToGetTrackingDetails($data);
        return $shipment;
    }

    public function GetShipmentTrace(array $data) : array {
        return $this->courier->getTrackingDetails($data);
    }
}

