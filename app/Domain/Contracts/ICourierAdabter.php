<?php

namespace App\Domain\Contracts;

interface ICourierAdabter
{
    public function createShipment(array $data) : array;

    public function GetShipmentTrace(array $data) : array;
}
