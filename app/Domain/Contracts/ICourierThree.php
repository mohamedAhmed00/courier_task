<?php

namespace App\Domain\Contracts;

interface ICourierThree
{
    public function createShipmentAndGetWayBill(array $data) : array;

    public function registerNumberToGetTrackingDetails(array $data) : array;

    public function getTrackingDetails(array $data) : array;
}
