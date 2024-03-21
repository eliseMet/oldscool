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

    public function store(UserRequest $request)
    {
        $validatedData = $request->validationData();
        $user = User::create($validatedData);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        dd("not working");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
