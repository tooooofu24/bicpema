<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class JavaScriptController extends Controller
{
    // 投稿画面用エリア取得メソッド
    public function getAreas(Request $request)
    {
        $areas = Area::select('id', 'name')
        ->where('subject', $request->subject)
        ->where('target', $request->target)
        ->get()
        ->toArray();
        return response()->json($areas);
    }
}
