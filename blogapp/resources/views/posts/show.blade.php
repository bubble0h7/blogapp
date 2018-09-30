@extends('layouts/app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{$post->title}}</h1>
        </div>
    </div>
    
    <div class="container">
        <a href="/posts" class="btn btn-primary">Go back</a>

        <p>
            <br />
            {!!$post->body!!}
        </p>
        <hr />
        <small>Posted on {{$post->created_at}}</small>
        <hr />
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>    
    
        
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
    
@endsection