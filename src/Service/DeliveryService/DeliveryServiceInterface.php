<?php

namespace DeliveryModule;

use Request\DeliveryRequestInterface;

interface DeliveryServiceInterface 
{
    public function calculateCostAndDate(DeliveryRequestInterface $request);
}