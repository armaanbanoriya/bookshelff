<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;
use App\Cart;

class RazorpayController extends Controller
{


    public function create()
    {
        return view('front.razorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('razor_key_id'), env('razor_key_secret'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
