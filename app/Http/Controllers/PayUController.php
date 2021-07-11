<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;

class PayUController extends Controller
{
    public function payumoneypayment()
    {
        echo "test";die;
        $parameters = [
            'transaction_no' => '1233221223322',
            'amount' => '1200.00',
            'name' => 'Jon Doe',
            'email' => 'jon@doe.com'
          ];

    }
}
