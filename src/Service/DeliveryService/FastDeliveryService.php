<?php

namespace DeliveryModule;

use DeliveryModule\Client\DeliveryClientInterface;
use DeliveryModule\Response\FastDeliveryResponse;
use Request\DeliveryRequestInterface;
use Request\FastDeliveryRequest;

class FastDeliveryService implements DeliveryServiceInterface 
{
    private $client;

    public function __construct(DeliveryClientInterface $client) 
    {
        $this->client = $client;
    }

    public function calculateCostAndDate(DeliveryRequestInterface|FastDeliveryRequest $request) : FastDeliveryResponse
    {
        $response = $this->client->sendRequest($request);
        return new FastDeliveryResponse(
            $response["price"],
            $response["period"]
        );
    }
}