<?php

use DeliveryModule\Client\FastDeliveryClient;
use DeliveryModule\Client\SlowDeliveryClient;
use DeliveryModule\FastDeliveryService;
use DeliveryModule\SlowDeliveryService;
use DeliveryModule\DeliveryCalculator;
use DeliveryModule\Response\FastDeliveryResponse;
use DeliveryModule\Response\SlowDeliveryResponse;

function handleFastDeliveryRequest(array $params) : array
{
    try
    {
        $deliveryService = new FastDeliveryService(new FastDeliveryClient("fast_delivery_url"));
        
        $calculator = new DeliveryCalculator($deliveryService);
        $response = $calculator->calculateDeliveryCostAndDate($params);
    }
    catch (\Exception $exception)
    {
        $response = (new FastDeliveryResponse(0, "", $exception->getMessage()))->getArrayResponse();
    }

    return $response;
}

function handleSlowDeliveryRequest(array $params) : array
{
    try
    {
        $deliveryService = new SlowDeliveryService(new SlowDeliveryClient("slow_delivery_url"));
        
        $calculator = new DeliveryCalculator($deliveryService);
        $response = $calculator->calculateDeliveryCostAndDate($params);
    }
    catch (\Exception $exception)
    {
        $response = (new SlowDeliveryResponse(0, "", $exception->getMessage()))->getArrayResponse();
    }

    return $response;
}