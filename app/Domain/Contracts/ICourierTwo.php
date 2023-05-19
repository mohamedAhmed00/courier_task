<?php

namespace App\Domain\Contracts;

interface ICourierTwo
{
    public function createShipmentInfo(array $data) : array;

    public function createShipmentInstructions(array $data) : array;

    public function createShipmentWayBill(array $data) : array;

    public function getShipmentTrackingDetails(array $data) : array;
}
