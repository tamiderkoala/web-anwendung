@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1>Willkommen zurück!</h1>
                <p>Schön, dass du wieder da bist. Du befindest dich auf deinem Profil. Hier hast du die Möglichkeit deine erstellten Rezepte zu sehen oder ein neues Rezept zu teilen.</p>
                <a href="/posts/create" class="btn btn-primary">Rezept teilen</a><br/><br/><hr><br/>
                <div class="clearfix"></div>

                @if(count($posts) >0 )
                <h3>Deine Rezepte</h3>
                    <table class="table table-striped">

                        @foreach ($posts as $post)
                        <tr id="table-row-{{$post->id}}">
                            <td>{{$post->title}}</td>
                            <th></th>
                            <th>
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Bearbeiten</a>

                                {!!Form::open(['onsubmit' => 'return false', 'class' => 'deleteButton'])!!}
                                    {{Form::hidden('postId', $post->id, ['class' => 'postId'])}}
                                    {{Form::submit('Löschen', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </th>
                        </tr>
                        @endforeach

                    </table>
                @endif


    </div>
</div>


@endsection
