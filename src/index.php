<?php

require 'routes.php';

header('Content-Type: application/json');

$requestUri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$response = [];

if ($method === 'POST') 
{
    if ($requestUri === '/api/v1/delivery/fast') 
    {
        $response = handleFastDeliveryRequest($_POST);
    } 
    elseif ($requestUri === '/api/v1/delivery/slow') 
    {
        $response = handleSlowDeliveryRequest($_POST);
    }
    else 
    {
        $response = ['error' => 'Unknown endpoint'];
    }
}
else 
{
    $response = ['error' => 'Method not allowed'];
}

echo json_encode($response);