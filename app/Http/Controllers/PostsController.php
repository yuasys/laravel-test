<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function show($id)
    {
        $today = date('Y-m-d');

        $post = Post::find($id);

        return view('posts.post', ['post' => $post, 'today' => $today]);
    }
}
