<?php

namespace App\Domain\Suppliers\Integration;

use App\Domain\Contracts\ICourierTwo;

class CourierTwo implements ICourierTwo
{
    public function createShipmentInfo(array $data) : array {
        /* TODO implement some staff here */
        return ['status' => 'success', 'courier' => '2'];
    }

    public function createShipmentInstructions(array $data) : array {
        /* TODO implement some staff here */
        return ['status' => 'success', 'courier' => '2'];
    }

    public function createShipmentWayBill(array $data) : array {
        /* TODO implement some staff here */
        return ['status' => 'success', 'courier' => '2'];
    }

    public function getShipmentTrackingDetails(array $data) : array {
        /* TODO implement some staff here */
        return [];
    }
}
