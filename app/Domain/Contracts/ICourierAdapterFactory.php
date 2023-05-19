<?php

namespace App\Domain\Contracts;

interface ICourierAdapterFactory
{
    public function courierFactory(string $type) : ICourierAdapter;
}
