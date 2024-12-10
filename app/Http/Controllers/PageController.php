<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // Consulta a base de datos
        /* $posts = Post::all();
        $posts = Post::get();
        $posts = Post::find(25);
        $posts = Post::first();
        $posts = Post::last(); */

        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
