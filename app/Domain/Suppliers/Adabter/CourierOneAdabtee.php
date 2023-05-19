<?php

namespace App\Domain\Suppliers\Adabter;

use App\Domain\Contracts\ICourierAdabter;
use App\Domain\Contracts\ICourierOne;
use App\Domain\Suppliers\Integration\CourierOne;

class CourierOneAdabtee implements ICourierAdabter
{
    private ICourierOne $courier;
    public function __construct()
    {
        $this->courier = new CourierOne();
    }

    public function createShipment(array $data) : array {
        return $this->courier->createShipmentAndGetWayBill($data);
    }

    public function GetShipmentTrace(array $data) : array {
        return $this->courier->getShipmentTrackingDetails($data);
    }
}
