<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class SignUpController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/SignUp');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'first_name' => ucwords(strtolower($request->first_name)),
            'last_name' => ucwords(strtolower($request->last_name)),
            'username' => strtolower($request->username),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password)
        ]);

        return redirect('/sign-in')->with('success', 'Successful registration, you can login now');
    }
}
