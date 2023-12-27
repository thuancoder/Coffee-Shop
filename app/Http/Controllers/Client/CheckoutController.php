<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use App\Mail\CheckoutMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart;
use App\Models\OrderDetail;

class CheckoutController extends Controller
{
    public function getCheckout(){
        return view('client.pages.checkout.checkout');

    }
}
