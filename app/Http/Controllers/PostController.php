<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['area', 'user'])->paginate(15);
        return view('top', compact('posts'));
    }
}
