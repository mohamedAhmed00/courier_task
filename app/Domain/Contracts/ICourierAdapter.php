<?php

namespace App\Domain\Contracts;

interface ICourierAdapter
{
    public function createShipment(array $data) : array;

    public function GetShipmentTrace(array $data) : array;
}
