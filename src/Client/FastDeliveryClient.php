<?php

namespace DeliveryModule\Client;

class FastDeliveryClient implements DeliveryClientInterface 
{
    /* API url */
    private $base_url;

    public function __construct($base_url) 
    {
        $this->base_url = $base_url;
    }

    public function sendRequest(array $requestData) 
    {
        // Formal sending of the request to the fast delivery API
        /*
            $response = ...
            return $response;
        */

        return (object)[

        ];
    }
}