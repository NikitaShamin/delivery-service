<?php

namespace DeliveryModule\Response;
use InvalidArgumentException;

class FastDeliveryResponse implements ResponseInterface 
{
    /* Delivery Price */
    private float $price;

    /* Delivery Period */
    private int $period;

    /* Any error if it occur */
    private string $error;

    public function __construct($price, $period, $error = "") 
    {
        // Response Validation

        if (!is_float($price)) 
        {
            throw new InvalidArgumentException('Invalid price. Price must be a float.');
        }

        if (!is_int($period)) 
        {
            throw new InvalidArgumentException('Invalid period. Price must be a int.');
        }
        
        $this->price = $price;
        $this->period = $period;
        $this->error = $error;
    }

    public function getArrayResponse()
    {
        return [
            "price" => $this->price,
            "period" => $this->period,
            "error" => $this->error
        ];
    }
}