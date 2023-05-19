<?php

namespace App\Domain\Contracts;

interface ICourierOne
{
    public function createShipmentAndGetWayBill(array $data) : array;

    public function getShipmentTrackingDetails(array $data) : array;
}
