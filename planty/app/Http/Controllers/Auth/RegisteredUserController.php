<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'username' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
    //         'password' => ['required', Rules\Password::defaults()],
    //         'password_confirmation' => ['required', 'same:password'],
    //         'agreement' => ['accepted'],
    //     ]);

    //     $user = User::create([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'address_id' => Address::create([])->id,
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect('/');
    // }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'username' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users,email',
            'password' => ['required', 'string', 'min:8'], // You can adjust this as per your requirements
            'password_confirmation' => 'required|same:password',
            'agreement' => 'accepted',
        ];

        $messages = [
            'required' => ':attribute wajib diisi',
            'unique' => ':attribute sudah terdaftar',
            'same' => ':attribute dan konfirmasi harus sama',
            'accepted' => 'Anda harus menyetujui persyaratan dan ketentuan',
            'min' => ':attribute minimal berisi :min karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator)
                ->with('danger', 'Pastikan semua field diisi dengan benar');
        } else {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address_id' => Address::create([])->id,
            ]);

            event(new Registered($user));
            Auth::login($user);

            return redirect('/')->with('success', 'Registrasi berhasil');
        }
    }

}
