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
<div class="my-3">
    <a href="{{ route('posts.index') }}" class="btn btn-primary"><i class="fas fa-backward"></i>　戻る</a>
</div>
<div class="row">
    <div class="col-9">
        <div class="card">
            <div class="card-body">
                <div class="ratio ratio-16x9 bg-primary rounded">
                    <div class="posution-relative post_img">
                        <img src="{{$post->thumbnail_url}}" alt="{{$post->title}}" class="rounded" style="object-fit: cover;">
                        <a href="{{ route('posts.run', ['id'=>$post->id]) }}" class="play_icon"><i class="far fa-play-circle fa-7x"></i></a>
                    </div>
                </div>
                <div class="fs-5 fw-bold p-1">
                    {{ $post->title }}
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <span class="badge bg-success">{{$post->area->subject}}</span>
                        <span class="badge bg-secondary">{{$post->area->target}}</span>
                        <span class="badge bg-info">{{$post->area->name}}</span>
                    </div>
                    <div class="col-1">
                        <a href="{{$post->download_url}}" target="_blank"><i class="fas fa-share-square"></i></a>
                    </div>
                </div>

                <div class="accordion" id="accordionPricing">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                説明
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPricing">
                            <div class="accordion-body">
                                {{ $post->comment }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        @foreach($recomendedPosts as $post)
        <div class="@if(!$loop->first)pt-3 @endif">
            @include('components.postCard')
        </div>
        @endforeach
    </div>
</div>
@endsection