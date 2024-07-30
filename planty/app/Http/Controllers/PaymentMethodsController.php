<?php

namespace App\Http\Controllers;

use App\Models\SubsCategory;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    //
    public function paymentDetail(SubsCategory $product, Request $request)
    {
        $gift = $request->has('gift') ? 'true' : 'false';
        $redeemed = $request->has('redeem_code') ? $request->redeem_code : 'false';

        return view('payment_detail', ["product" => $product, "gift" => $gift, "redeemed" => $redeemed]);
    }
}
