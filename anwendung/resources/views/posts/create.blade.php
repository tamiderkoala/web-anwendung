@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>Rezept hinzufügen</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('title', 'Rezeptname')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Rezeptname'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Zutaten & Zubereitung')}}
            {{Form::textarea('body', '', ['id'=> 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Zutaten & Zubereitung'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::submit('Einreichen', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
</div>
@endsection
