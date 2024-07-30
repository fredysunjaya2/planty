<?php

namespace App\Http\Controllers;

use App\Models\SubsCategory;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    //
    public function paymentDetail(SubsCategory $product, Request $request) {
        $gift = is_null($request->gift) ? 0 : 1;

        return view('payment_detail', compact('product', 'gift'));
    }
}
