@extends('layouts.navigation')

@section('content')
<div class="pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="{{ route('posts.index') }}"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="{{ route('posts.showPost',['id'=>$post->id]) }}">投稿詳細</a></li>
            <li class="breadcrumb-item active" aria-current="page">実行</li>
        </ol>
    </nav>
</div>
<div class="my-3">
    <a href="{{ route('posts.showPost',['id'=>$post->id]) }}" class="btn btn-primary"><i class="fas fa-backward"></i>　戻る</a>
</div>
<div class="mx-5">
    <div class="mx-5 position-relative">
        <div class="spinner-border loading" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div id="canvas" class="ratio ratio-16x9"></div>
        <a>
            <div class="expand">
                <i class="fas fa-expand fa-3x"></i>
            </div>
        </a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/p5@1.1.9/lib/p5.js"></script>
<script src="{{ $post->js_url }}"></script>
<script src="/js/jquery-fullscreen.js"></script>

@endsection