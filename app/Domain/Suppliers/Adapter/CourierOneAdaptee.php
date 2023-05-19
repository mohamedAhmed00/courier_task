<?php

namespace App\Domain\Suppliers\Adapter;

use App\Domain\Contracts\ICourierAdapter;
use App\Domain\Contracts\ICourierOne;
use App\Domain\Suppliers\Integration\CourierOne;

class CourierOneAdaptee implements ICourierAdapter
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
