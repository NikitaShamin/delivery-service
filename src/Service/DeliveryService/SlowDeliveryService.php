<?php

namespace DeliveryModule;

use DeliveryModule\Client\DeliveryClientInterface;
use DeliveryModule\Response\SlowDeliveryResponse;
use Request\DeliveryRequestInterface;
use Request\SlowDeliveryRequest;

class SlowDeliveryService implements DeliveryServiceInterface 
{
    private $client;

    public function __construct(DeliveryClientInterface $client) 
    {
        $this->client = $client;
    }

    public function calculateCostAndDate(DeliveryRequestInterface|SlowDeliveryRequest $request) : SlowDeliveryResponse
    {
        $response = $this->client->sendRequest($request);
        return new SlowDeliveryResponse(
            $response["coefficient"],
            $response["period"]
        );
    }
}