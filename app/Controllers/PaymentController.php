<?php 

namespace App\Controllers;

use App\Models\Payment;
use App\Models\Customer;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Response;

class PaymentController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $payments =  Customer::all();
//header("HTTP/1.1 404 OK");
           Response::create('succcess', 404, ['Content-type' => 'application/json', 'Accept' => 'application/json']);
	}

}