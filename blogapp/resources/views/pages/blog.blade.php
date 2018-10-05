@extends('layouts/app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
          <h1 class="display-4">Blog</h1>
          <p class="lead">Tutorial-vomit, more than likely.</p>
    </div>
</div>
<div class="container">
    @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <p>
                        {!!$post->body!!}
                    </p>
                    <small>{{$post->created_at}}</small>
                    <hr />
                </div>
            @endforeach
            {{$posts->links()}}
        @else 
                <p>No posts found</p>
        @endif
</div>
@endsection