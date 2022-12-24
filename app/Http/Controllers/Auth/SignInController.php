<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticateRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SignInController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/SignIn');
    }

    public function authenticate(AuthenticateRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors(['credentials' => 'Bad credentials']);
    }
}
