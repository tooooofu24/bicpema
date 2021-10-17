@extends('layouts.navigation')

@section('content')
<div class="pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item active" aria-current="page"><span class="fas fa-home"></span></li>
        </ol>
    </nav>
</div>
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