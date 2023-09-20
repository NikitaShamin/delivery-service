<?php

namespace DeliveryModule\Response;
use InvalidArgumentException;

class SlowDeliveryResponse implements ResponseInterface 
{
    /* Delivery Coefficient */
    private float $coefficient;

    /* Delivery Period */
    private int $period;

    /* Any error if it occur */
    private string $error;

    public function __construct($coefficient, $period, $error = "") 
    {
        // Response Validation

        if (!is_float($coefficient)) 
        {
            throw new InvalidArgumentException('Invalid coefficient. Price must be a float.');
        }
        
        $this->coefficient = $coefficient;
        $this->period = $period;
        $this->error = $error;
    }

    public function getArrayResponse()
    {
        return [
            "coefficient" => $this->coefficient,
            "period" => $this->period,
            "error" => $this->error
        ];
    }
}