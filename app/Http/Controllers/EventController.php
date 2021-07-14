<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        //$categories = Category::orderBy('title')->get();
        $posts = Post::where('is_published', 1)->paginate(8);
        return view(
            'pages.index',
            [
                'posts' => $posts,
                //    'categories' => $categories,
            ]

        );
    }

    public function getPostsByCategory($slug)
    {
        //$categories = Category::orderBy('title')->get();
        $currentCategory = Category::where('slug', $slug)->first();
        return view(
            'pages.index',
            [
                'posts' => $currentCategory->posts()->where('is_published', 1)->paginate(8),
                //    'categories' => $categories,
            ]

        );
    }

    public function getPost($slug_category, $slug_post)
    {
        $comments = Post::find(1)->comments;
        $post = Post::where('slug', $slug_post)->first();

        return view(
            'pages.show_post',
            [
                'post' => $post,
                'comments' => $comments
            ]
        );
    }
}
