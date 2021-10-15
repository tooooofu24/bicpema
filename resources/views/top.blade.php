@extends('layouts.navigation')

@section('content')
<div class="row">
    @foreach($posts as $post)
    <div class="col-4 px-3 pb-4">
        <a href="{{ route('posts.showPost',['id'=>$post->id]) }}">
            <div class="card shadow border-0 p-0">
                <div class="ratio ratio-16x9">
                    <img src="{{$post->thumbnail_url}}" alt="{{$post->title}}" class="rounded-top" style="object-fit: cover;">
                </div>
                <div class="card-body py-2 pb-4">
                    <div class="fw-bold text-truncate">{{$post->title}}</div>
                    <div>
                        <span class="badge bg-gray-500">{{$post->area->name}}</span>
                        <span class="badge bg-gray-500">{{$post->area->grade}}</span>
                        <span class="badge bg-gray-500">{{$post->area->subject}}</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
<div class="mt-3">
    {{$posts->links()}}
</div>
@endsection