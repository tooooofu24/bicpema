<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index()
    {
        $myPosts = Post::inRandomOrder()->take(4)->get();
        $favoritedPosts = Post::inRandomOrder()->take(4)->get();;
        return view('mypage.index', compact('myPosts', 'favoritedPosts'));
    }
}
