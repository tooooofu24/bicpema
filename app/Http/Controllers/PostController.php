<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 一覧画面
    public function index()
    {
        $posts = Post::with(['area', 'user'])->paginate(15);
        return view('top', compact('posts'));
    }

    public function showPost($id)
    {
        $post = Post::with('area', 'user')->find($id);
        return view('posts.index', compact('post'));
    }
}
