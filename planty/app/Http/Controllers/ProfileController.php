<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            // Add other validation rules here
        ]);

        $request->user()->fill($validatedData);

        $request->user()->save();

        return Redirect::route('profile')->with('status', 'profile-updated');
    }

    public function addressUpdate(Request $request): RedirectResponse
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

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
