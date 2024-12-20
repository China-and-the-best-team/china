<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
{
    $request->validate([
        'comment' => 'required|string|max:255',
    ]);

    $post = Post::findOrFail($postId);

    $post->comments()->create([
        'user_id' => auth()->id(),
        'content' => $request->comment,
    ]);

    return redirect()->route('show', $postId)->with('success', 'Comment added successfully!');
}
}
