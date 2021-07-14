<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view(
            'admin.post.index',
            [
                'posts' => $posts
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all('title');
        return view(
            'admin.post.create',
            [
                'categories' => $categories
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = $request->slug;
        $post->cover = $request->cover;
        $post->text = $request->text;
        $post->date = $request->date;
        $post->time = $request->time;
        $post->venue = $request->venue;
        $post->price = $request->price;
        $post->settlement = $request->settlement;
        if ($request->is_published == 1) {
            $post->is_published = $request->is_published;
        } else {
            $post->is_published = 0;
        }
        $post->save();

        return redirect()->back()->withSuccess('Пост створено');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all('title');
        return view(
            'admin.post.edit',
            [
                'categories' => $categories,
                'post' => $post,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = $request->slug;
        $post->cover = $request->cover;
        $post->text = $request->text;
        $post->date = $request->date;
        $post->time = $request->time;
        $post->venue = $request->venue;
        $post->price = $request->price;
        $post->settlement = $request->settlement;

        if ($request->is_published == 1) {
            $post->is_published = $request->is_published;
        } else {
            $post->is_published = 0;
        }
        $post->save();

        return redirect()->back()->withSuccess('Пост оновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Пост успішно видалено');
    }
}
