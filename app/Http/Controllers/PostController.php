<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isLoggedIn = Auth::check();
        $posts = Post::groupBy('id', 'desc')->get();
        return view('welcome', compact('posts', 'isLoggedIn'));
    }

    public function index2()
    {
        return view('post-create');
    }

    public function show($id)
    {
        $isLoggedIn = Auth::check();
        $post = Post::findOrFail($id);
        return view('single-place', compact('post', 'isLoggedIn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'city' => $request->city,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

}
