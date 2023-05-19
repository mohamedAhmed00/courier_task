<?php

namespace App\Domain\Suppliers\Adabter;

use App\Domain\Contracts\ICourierAdabter;
use App\Domain\Contracts\ICourierThree;
use App\Domain\Suppliers\Integration\CourierThree;

class CourierThreeAdabtee implements ICourierAdabter
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

