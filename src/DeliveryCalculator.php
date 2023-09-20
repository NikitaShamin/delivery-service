<?php

namespace DeliveryModule;

class DeliveryCalculator 
{
    private $deliveryService;

    public function __construct(DeliveryServiceInterface $deliveryService) 
    {
        $this->deliveryService = $deliveryService;
    }

    public function calculateDeliveryCostAndDate(array $deliveryRequests) 
    {
        $results = [];

        foreach ($deliveryRequests as $request) 
        {
            $result = $this->deliveryService->calculateCostAndDate($request);
            $results[] = [
                'price' => $result->getPrice(),
                'date' => $result->getDate(),
                'error' => $result->getError(),
            ];
        }

        return $results;
    }
}