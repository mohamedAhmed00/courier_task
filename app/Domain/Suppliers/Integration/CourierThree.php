<?php

namespace App\Domain\Suppliers\Integration;

use App\Domain\Contracts\ICourierThree;

class CourierThree implements ICourierThree
{
    public function createShipmentAndGetWayBill(array $data) : array {
        /* TODO implement some staff here */
        return ['status' => 'success', 'courier' => '3'];
    }

    public function registerNumberToGetTrackingDetails(array $data) : array {
        /* TODO implement some staff here */
        return ['status' => 'success', 'courier' => '3'];
    }

    public function getTrackingDetails(array $data) : array {
        /* TODO implement some staff here */
        return [];
    }
}
