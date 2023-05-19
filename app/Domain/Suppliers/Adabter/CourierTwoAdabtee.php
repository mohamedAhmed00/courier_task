<?php

namespace App\Domain\Suppliers\Adabter;

use App\Domain\Contracts\ICourierAdabter;
use App\Domain\Contracts\ICourierTwo;
use App\Domain\Suppliers\Integration\CourierTwo;

class CourierTwoAdabtee implements ICourierAdabter
{
    private ICourierTwo $courier;
    public function __construct()
    {
        $this->courier = new CourierTwo();
    }

    public function createShipment(array $data) : array {
        $this->courier->createShipmentInfo($data);
        $this->courier->createShipmentInstructions($data);
        return $this->courier->createShipmentWayBill($data);
    }

    public function GetShipmentTrace(array $data) : array {
        return $this->courier->getShipmentTrackingDetails($data);
    }
}
