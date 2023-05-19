<?php

namespace App\Domain\Suppliers\Integration;

use App\Domain\Contracts\ICourierOne;

class CourierOne implements ICourierOne
{
    public function createShipmentAndGetWayBill(array $data) : array {
        /* TODO implement some staff here */
        return ['status' => 'success', 'courier' => '1'];
    }

    public function getShipmentTrackingDetails(array $data) : array {
        /* TODO implement some staff here */
        return [];
    }
}
