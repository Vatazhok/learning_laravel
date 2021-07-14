<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $users_count=User::all('id')->count();
        $posts_count=Post::all('id')->count();
        $categories_count=Category::all('id')->count();
        $comments_count=Comment::all('id')->count();

        return view('admin.home.index',[
            'posts_count'=> $posts_count,
            'categories_count'=> $categories_count,
            'users_count' => $users_count,
            'comments_count' => $comments_count,

        ]);
    }
}
