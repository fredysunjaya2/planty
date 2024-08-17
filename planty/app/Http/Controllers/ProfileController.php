<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Transaction;
use DateInterval;
use DateTime;
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

    public function index(): View
    {
        $transaction = Transaction::join('users', 'users.id', '=', 'transactions.user_id')
            ->join('subs_categories', 'subs_categories.id', '=', 'transactions.subs_category_id')
            ->leftJoin('gifts', 'gifts.transaction_id', '=', 'transactions.id')
            ->select('*', 'transactions.id as transaction_id')
            ->where('transactions.user_id', '=', auth()->user()->id)
            ->where('transactions.status', '=', 'success')
            ->whereNull('gifts.redeem_code')
            ->orderBy('transactions.created_at', 'desc')
            ->first();

        if($transaction != null) {
            $date = new DateTime($transaction->created_at);
            $date->add(new DateInterval('P' . strval($transaction->months) . 'M'));
            $curDate = now();

            if ($date >= $curDate) {
                $status = 'Subscribed';
            } else {
                $status = 'Not Subscribed';
                $date = '-';
            }
        } else {
            $status = 'Not Subscribed';
            $date = '-';
        }


        return view('profile', compact('status', 'date'));
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
