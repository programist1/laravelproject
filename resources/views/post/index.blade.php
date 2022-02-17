@extends('layouts.main')
@section('content')

    @foreach($posts as $post)
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <a href="{{route('posts.show', $post->id)}}">SHOW</a>
                <h3 class="mb-0">{{$post->title}}</h3>
                <div class="mb-1 text-muted">{{$post->created_at}}</div>
                <p class="card-text mb-auto">{{$post->text}}</p>

            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{$post->img}}" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"  focusable="false"><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            </div>

        </div>
    </div>
    @endforeach

@endsection
