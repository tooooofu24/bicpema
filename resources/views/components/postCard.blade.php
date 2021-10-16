<a href="{{ route('posts.showPost',['id'=>$post->id]) }}">
    <div class="card shadow border-0 p-0">
        <div class="ratio ratio-16x9">
            <img src="{{$post->thumbnail_url}}" alt="{{$post->title}}" class="rounded-top" style="object-fit: cover;">
        </div>
        <div class="card-body py-2 pb-4">
            <div class="fw-bold text-truncate">{{$post->title}}</div>
            <div>
                <span class="badge bg-success">{{$post->area->subject}}</span>
                <span class="badge bg-secondary">{{$post->area->target}}</span>
                <span class="badge bg-info">{{$post->area->name}}</span>
            </div>
        </div>
    </div>
</a>