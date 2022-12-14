<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    //
    public function store(OrderDetails $orderDetails, PaymentGateway $paymentGateway)
    {
        $orders = $orderDetails->all();
        dd($paymentGateway->charge(200));
    }
}
