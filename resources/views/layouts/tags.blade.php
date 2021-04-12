@php
    $tags = $tags ?? collect();
@endphp

@if($tags->isNotEmpty())
    @foreach($tags as $tag)
        <div>
            <a href="{{ route('articles.tags', $tag->getRouteKey()) }}" class="badge badge-secondary text-white bg-secondary">{{ $tag->name }}</a>
        </div>
    @endforeach
@endif