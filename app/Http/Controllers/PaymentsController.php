<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use App\Mail\PaymentFailed;
use Illuminate\Http\Request;
use App\Mail\PaymentSuccessfulMail;
use Illuminate\Support\Facades\Mail;
use Exception;

class PaymentsController extends Controller
{

    public function handlePayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            'amount' => 100 * $request->amount,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            "description" => "This payment is tested purpose",
        ]);
        return back();
    }
}
