<?php

namespace Request;

interface DeliveryRequestInterface 
{
    public function convert(array $request): object;
}