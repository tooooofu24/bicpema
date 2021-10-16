@extends('layouts.navigation')

@section('content')
<div class="row">
    @foreach($posts as $post)
    <div class="col-4 px-3 pb-4">
        @include('components.postCard')
    </div>
    @endforeach
</div>
<div class="mt-3">
    {{$posts->links()}}
</div>
@endsection