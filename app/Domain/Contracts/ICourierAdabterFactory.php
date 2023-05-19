<?php

namespace App\Domain\Contracts;

interface ICourierAdabterFactory
{
    public function courierFactory(string $type) : ICourierAdabter;
}
