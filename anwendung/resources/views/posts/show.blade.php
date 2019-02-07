@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>{{$post->title}}</h1>
    <small>von {{$post->user->name}}<br/></small>

    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}"><br/>
    <div>
        {!!$post->body!!}
    </div>
    <small>Veröffentlicht am {{$post->created_at}}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Bearbeiten</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Löschen', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

</div>

@endsection
