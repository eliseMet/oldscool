<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration()
    {
        return view('web.pages.inscription');
    }

    public function connection()
    {
        return view('web.pages.connection');
    }

    public function edit()
    {
        return view('web.pages.edit');
    }

    public function store(UserRequest $request)
    {
        $validatedData = $request->validationData();
        $user = User::create($validatedData);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->route('homeProfile');
        }
        dd("not working");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homeProfile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function info_user()
    {
        // Récupérer l'utilisateur connecté
        $user = auth()->user();
        // Passer les informations de l'utilisateur à la vue
        return view('header', ['user' => $user]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
