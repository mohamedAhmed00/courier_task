<?php

namespace App\Domain\Contracts;

interface IShipmentService
{
    public function sendShipment(array $data);

    public function trackShipment(array $data);
}
