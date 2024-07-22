<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Ramsey\Uuid\Uuid;
use App\Mail\GiftMail;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\SubsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TransactionsController extends Controller
{    
    public function processPayment(Request $request)
    {

        $subsCategory = SubsCategory::join('transactions', 'transactions.subs_category_id', '=', 'subs_categories.id')
                            ->select('subs_categories.*')
                            ->where('subs_categories.id', '=', $request->input('subsId'))
                            ->first();

        $data = $request->all();
        $gift = $data['gift'];
        // $generatedCode = $data['generatedCode'];
        
        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'subs_category_id' => $data['subsId'],
            'discounted_price' => $data['discountedPrice'],
            'status' => 'pending',
        ]);
        
        if ($gift == 'true') {
            $giftCode = $this->generateUniqueCode();
            Gift::create([
                'transaction_id' => $transaction->id,
                'redeem_code' => $giftCode,
                'is_redeemed' => false,
            ]);
        }

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['discountedPrice'],
            ),
            'customer_details' => array(
                'email' => Auth::user()->email,
            'first_name' => Auth::user()->first_name,
                'last_name' => Auth::user()->last_name,
                'phone' => Auth::user()->phone_number, 
                'shipping_address' => array(
                    'address' => Auth::user()->address->street. ' Number '.Auth::user()->address->number.', '.Auth::user()->address->district.', '.Auth::user()->address->village.', '.Auth::user()->address->city.', '.Auth::user()->address->country,
                    'postal_code' => Auth::user()->address->postal_code
                )
            )
        );
        
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        $transaction->snap_token = $snapToken;
        $transaction->save();

        // Kirim email setelah pembayaran berhasil
        // if ($this->isPaymentSuccessful($transaction)) {
        //     $gift = Gift::where('transaction_id', $transaction->id)->first();
        //     if ($gift) {
        //         $this->sendGiftEmail($gift);
        //     }
        // }

        // return redirect()->route('checkout');
        
        $product = $transaction;
        // dd($gift);


        return view('payment_detail',  compact('product', 'gift'));
    }

    private function generateUniqueCode()
    {
        $code = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
        return $code;
    }

    private function isPaymentSuccessful($transaction)
    {
        try {
            $status = \Midtrans\Transaction::status($transaction->order_id);

            if ($status->transaction_status == 'capture' || $status->transaction_status == 'settlement') {
                $transaction->status = 'success';
                $transaction->save();

                $gift = Gift::where('transaction_id', $transaction->id)->first();
                if ($gift) {
                    $this->sendGiftEmail($transaction, $gift->redeem_code);
                }

                return true;
            } else {
                $transaction->status = $status->transaction_status;
                $transaction->save();

                return false;
            }
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return false;
        }
    }

    private function sendGiftEmail($transaction, $redeemCode)
    {
        $user = $transaction->user;
    
        Mail::send('emails.gift', ['redeemCode' => $redeemCode], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Your Gift Code');
        });
    }

    public function checkout($transaction)
    {
        $product = Transaction::where('transactions.id' , '=' , $transaction)->first();
        // $isGift = $gift;
        dd($product);
        // $gift = Gift::where('gifts.transaction_id', '=', $transaction->id);

        // if($gift != null) {
        //     $gift = true;
        // } else {
        //     $gift = false;
        // } 

        // return view('payment_detail',  compact('transaction', 'product', 'gift'));
    }

    public function success($transaction){
        // $transaction->status = 'success';

        $transactionUpdate = Transaction::where('transactions.id' , '=', $transaction)->first();
        $transactionUpdate->status = "success";
        $transactionUpdate->save();
        
        dd($transactionUpdate); 

        // return view('index');
    }

    public function failed(Transaction $transaction){
        $transaction->status = 'failed';
        $transaction->save();

        return view('subscription');
    }
}
