@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="title text-center py-5">News</h1>

    <div class="posts">
        @foreach ($posts as $post)
        <div class="card mb-5 w-75 mx-auto">

            <div class="p-3">
                <h3 class="card-title text-center">{{$post->title}}</h3>
                <p class="card-text">{{$post->content}}</p>
            </div>
            <div class="">
                    <img src="{{$post->image}}" class="card-img-top" alt="...">
                <div class="card-text d-flex justify-content-between p-3">
                    <h6>Posted by: {{$post->author}}</h6>
                    <small class="text-muted">Last updated {{$post->date_created}}</small>
                </div>
            </div>
        </div>
        @endforeach
        <div class="pages text-center">
            {{$posts->links()}}
        </div>

    </div>
</div>

@endsection
