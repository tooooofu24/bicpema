@extends('layouts.navigation')

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="fs-4 mb-3">{{$post->title}}</h1>
        <div class="row">
            <div class="col">
                <div class="ratio ratio-16x9">
                    <img src="{{$post->thumbnail_url}}" alt="{{$post->title}}" class="rounded" style="object-fit: cover;">
                </div>
            </div>
            <div class="col">
                <table class="table">
                    <div class="table-responsive">
                        <thead class="thead-light">
                        <tbody>
                            <tr>
                                <td class="border-0 col-3">科目</td>
                                <td class="border-0">{{$post->area->subject}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 col-3">対象</td>
                                <td class="border-0">{{$post->area->target}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 col-3">分野</td>
                                <td class="border-0">{{$post->area->name}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 col-3">コメント</td>
                                <td class="border-0">{{$post->comment}}</td>
                            </tr>
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
            <a href="{{ route('posts.run', ['id'=>$post->id]) }}" class="btn btn-primary me-3">実行</a>
            <a href=""><i class="fas fa-download fa-2x"></i></a>
        </div>
    </div>
</div>
@endsection