<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AddressesController extends Controller
{
    //
    public function update(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'street_number' => 'string|max:255',
            'city' => 'string|max:255',
            'country' => 'string|max:255',
            'village' => 'string|max:255',
            'district' => 'string|max:255',
            'postal_code' => 'string|max:255',
        ]);

        $isSameAddress = Auth::user()->address->street_number === $request->street_number &&
            Auth::user()->address->city === $request->city &&
            Auth::user()->address->country === $request->country &&
            Auth::user()->address->village === $request->village &&
            Auth::user()->address->district === $request->district &&
            Auth::user()->address->postal_code === $request->postal_code;

        if (!$isSameAddress) {
            $address = Address::create([
                'street_number' => $request->street_number,
                'city' => $request->city,
                'country' => $request->country,
                'village' => $request->village,
                'district' => $request->district,
                'postal_code' => $request->postal_code,
            ]);

            $user = $request->user();
            $user->address_id = $address->id;
            $user->save();
        } else {
            $request->user()->address->fill($validatedData);
            $request->user()->address->save();
        }


        return Redirect::route('profile')->with('status', 'profile-updated');
    }
}
