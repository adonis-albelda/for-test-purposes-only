<?php

namespace App\Billing;

class Paymentgateway
{
    private $currency;

    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
        $list = [1, 2, 3, 4, 5];
    }

    public function setdiscount($discount)
    {
        $this->discount = $discount;
    }

    public function charge($amount)
    {
        return [
            'amount' => $amount,
            'confirmation_number' => 'test123',
            'currency' => $this->currency,
            'discount' => $this->discount,
        ];
    }
}
