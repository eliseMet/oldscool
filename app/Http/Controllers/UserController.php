<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return view('web.pages.inscription');
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        dd($user);
    }
}
