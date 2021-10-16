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

    // 詳細画面
    public function showPost($id)
    {
        $post = Post::with('area', 'user')->find($id);
        $recomendedPosts = Post::inRandomOrder()->take(3)->get();
        return view('posts.index', compact('post', 'recomendedPosts'));
    }

    // 実行画面
    public function run($id)
    {
        $post = Post::find($id);
        return view('posts.run', compact('post'));
    }
}
