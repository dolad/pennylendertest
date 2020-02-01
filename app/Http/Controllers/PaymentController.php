<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Paystack;
use App\Wallet;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        // dd($paymentDetails['data']['reference']);
        // dd(Auth::user()->id);
        // dd($paymentDetails);
         $amount=$paymentDetails['data']['amount']/100;
        // dd($amount);
       
        Wallet::create([
            "user_id"=>Auth::user()->id,
            "amount"=>$amount,
            "transaction_id"=>$paymentDetails['data']['reference'],
            "buyer_email"=>Auth::user()->email,
        ]);

        // return redirect()->back();
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}