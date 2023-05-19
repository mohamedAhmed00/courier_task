<?php

namespace App\Http\Controllers;

use App\Domain\Contracts\IShipmentService;
use App\Http\Requests\ShippingRequest;

class ShippingController extends Controller
{
    public function __construct(private readonly IShipmentService $shipmentService)
    {
    }

    public function sendShipment(ShippingRequest $shippingRequest){
        return $this->shipmentService->sendShipment($shippingRequest->validated());
    }
}
