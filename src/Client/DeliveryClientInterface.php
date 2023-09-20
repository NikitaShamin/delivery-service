<?php

namespace DeliveryModule\Client;

use Request\DeliveryRequestInterface;

interface DeliveryClientInterface 
{
    public function sendRequest(DeliveryRequestInterface $requestData);
}