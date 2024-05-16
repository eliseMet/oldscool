<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Address;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        return view('web.pages.posts.list', [
            'posts' => Post::all(),
        ]);
    }
    public function create()
    {
        return view('web.pages.posts.create');
    }
    // public function edit()
    // {
    //     return view('web.pages.edit', [
    //         'user' => Auth::user(),
    //     ]);
    // }

    public function store(PostRequest $request)
    {
        try {
            $post = Post::create(array_merge(
                $request->all(),
                [
                    'user_id' => Auth::id()
                ]
            ));

            return redirect()->back();
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            dd($th->getMessage());
        }
    }

    // public function update(UserRequest $request)
    // {
    //     // $user = Auth::user();
    //     $user = User::find(Auth::id());
    //     $user->update($request->all());

    //     return redirect()->back();
    // }


}
