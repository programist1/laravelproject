<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      $posts = Post::all();
      return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }
}
