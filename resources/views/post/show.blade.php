@extends('layouts.main')
@section('content')
    <div class="row featurette">
        <div class="col-md-7 order-md-2 mt-4">
            <h2 class="featurette-heading">{{$post->title}}</h2>
            <p class="lead">{{$post->text}}</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="../{{$post->img}}"class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect></img>

        </div>
    </div>
@endsection
