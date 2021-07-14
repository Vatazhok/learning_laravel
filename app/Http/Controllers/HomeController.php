<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = Auth::user()->name;
        $comments = Comment::where('author', $auth)->get();
        $user = User::where('name', $auth)->first();
        return view(
            'dashboard.home',
            [
                'comments' => $comments,
                'user' => $user,
            ]
        );
//        return view('dashboard.home');
    }

//    public function update(Request $request, User $user)
//    {
//        $id =Auth::user()->id;
//        $password = Auth::user()->password;
//        $user->id = $id;
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $password;
//
//
//        $user->save();
//
//        return view('dashboard.home');
//
//    }
}
