<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
=======
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
>>>>>>> 3dcee82e66d16851938d2fe8177a9657c8d0d059
}
