@extends('layouts.navigation')

@section('content')
<div class="pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="{{ route('posts.index') }}"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item active" aria-current="page">投稿詳細</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="text-end">
            <button class="btn btn-primary me-2">プロフィール編集</button>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">@csrf<button class="btn btn-secondary">ログアウト</button></form>
        </div>
        <h2 class="h5 mb-3">自分の投稿</h2>
        <div class="row">
            @foreach($myPosts as $post)
            <div class="col">
                @include('components.postCard')
            </div>
            @endforeach
            <div style="width: 150px;" class="d-flex justify-content-center align-items-center">
                <a href=""><i class="fas fa-ellipsis-h fa-3x" data-bs-toggle="tooltip" data-bs-placement="top" title="さらに表示する"></i></a>
            </div>
        </div>
        <h2 class="h5 my-3">お気に入りした投稿</h2>
        <div class="row">
            @foreach($favoritedPosts as $post)
            <div class="col">
                @include('components.postCard')
            </div>
            @endforeach
            <div style="width: 150px;" class="d-flex justify-content-center align-items-center">
                <a href=""><i class="fas fa-ellipsis-h fa-3x" data-bs-toggle="tooltip" data-bs-placement="top" title="さらに表示する"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection