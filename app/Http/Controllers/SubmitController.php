<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubmitController extends Controller
{
    public function index()
    {
        return view('submit.index');
    }

    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'subject' => 'required',
            'target' => 'required',
            'area_id' => 'required|integer|between:1,90',
            'js' => 'required',
            'img' => '',
            'comment' => 'max:65535',
        ]);
        $post = new Post;
        $image = $request->file('img');
        if ($image) {
            // S3のimgフォルダへアップロード
            $image_path = Storage::disk('s3')->put('test', $image, 'public');
            $post->thumbnail_url = "https://phet.s3.ap-northeast-1.amazonaws.com/$image_path";
        }
        $js = $request->file('js');
        $js_path = Storage::disk('s3')->put('test', $js, 'public');
        $post->js_url = "https://phet.s3.ap-northeast-1.amazonaws.com/$js_path";

        $post->fill($request->only([
            'title', 'area_id', 'comment'
        ]));
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('submit.index')->with('flash_message', '投稿が完了しました！');
    }
}
