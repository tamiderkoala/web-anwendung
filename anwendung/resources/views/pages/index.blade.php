@extends('layouts.app')

@section('content')

    <div id="background" class="container">
        <p>HERZLICH WILLKOMMEN AUF</p>
        <h1>Food Love</h1>
    </div>

    <div class="jumbotron">

        <div class="container">
            <p>Hier findest du viele Rezepte, um deinen Essensalltag abwechslungsreicher zu gestalten. Ich hoffe du hast Spaß und endeckst leckere Ideen für dich. <br/>
            Du möchtest deine besten Rezepte mit uns teilen? Melde dich an oder registriere dich, um teil der Community zu werden.</p>
            <div class="justify-content-center"><a class="btn btn-primary btn-lg" href="/login" role="button">Einloggen</a><a class="btn btn-success btn-lg" href="/register" role="button">Registrieren</a></div><br/><br/>
        </div>

    </div>

@endsection
