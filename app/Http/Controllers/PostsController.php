<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function show($slug) {

        // Backslash indicates global namespace
        // Could also put "use DB;" at top
        // $post = \DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();


        return view('post', [
            'post' => $post
        ]);
    }
}
