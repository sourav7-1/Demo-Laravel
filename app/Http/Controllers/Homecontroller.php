<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $post = Post::first();
        if (! $post || $post->user_id != 1) {
            $post = null;
        }

        return view('landing.landing', compact('post'));
    }
}
