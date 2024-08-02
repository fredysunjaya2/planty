<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
            // Add other validation rules here
        ]);

        $request->user()->address->fill($validatedData);

        $request->user()->address->save();

        return Redirect::route('profile')->with('status', 'profile-updated');
    }
}
