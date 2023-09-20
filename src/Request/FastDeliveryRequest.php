<?php

namespace Request;

class FastDeliveryRequest implements DeliveryRequestInterface 
{
    private string $sourceKladr;

    private string $targetKladr;

    private float $weight;

    public function convert(array $request): object 
    {
        return (object) [
            'sourceKladr' => $request['source_kladr'],
            'targetKladr' => $request['target_kladr'],
            'weight' => (float) $request['weight'],
        ];
    }

    public function getSourceKladr() : string
    {
        return $this->sourceKladr;
    }

    public function getTargetKladr() : string
    {
        return $this->targetKladr;
    }

    public function getWeight() : float
    {
        return $this->weight;
    }
}