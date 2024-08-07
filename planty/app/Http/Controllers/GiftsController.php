<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GiftsController extends Controller
{
    //
    public function redeemCode(Request $request)
    {
        $data = $request->json()->all();

        $gift = Gift::where('redeem_code','=', $data["redeem_code"])
        ->where('is_redeemed', '=', 0)->first();

        if($gift == null) {
            return json_encode('false');
        }

        $product = $gift->transaction->subsCategory;

        return json_encode($product);
    }

}
