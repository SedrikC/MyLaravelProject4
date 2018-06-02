@extends('layouts.Startseite')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>EasyPlan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/gif" href="img/Logo-EasyPlan.gif">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/Startseitecss.css">
</head>
<h1>Veranstaltungen</h1>
    @foreach( $Events as $veranstaltung)
        <h2>Veranstaltungsname: {{ $veranstaltung->Name }}</h2>
        <h2>Veranstaltungsort: {{ $veranstaltung->Ort }}</h2>
        <h2>Veranstalter:  {{ $veranstaltung->Veranstalter }}</h2

<br>
<div class="row">
<div class="col-md-6">

    <h2>Teilnahme</h2>

<form action="/Teilnahme">
    Ja <input type="radio" name="answer" value="0" onclick="this.form.submit();">
    Nein<input type="radio" name="answer" value="1" onclick="this.form.submit();">
    <input type="hidden" name="VerID" value="<?php echo $id?>">
</form>
    Teilnehmer:
    @foreach($Teilnahme as $teilnahme) {{$teilnahme->name}} @endforeach
    <br>
    Absagen:
    @foreach($Absagen as $absagen) {{$absagen->name}}@endforeach


    <br><br>
<h2>Umfragen</h2>

    <br>
    @foreach($Poll as $poll)
      <h2>{{$poll->Titel}}</h2>
        @foreach($Option as $option)
        <input type="radio" value="{{$option->optionid}}">{{$option->Name}} <br>
        @endforeach
    @endforeach
    <a href ="{{route('Pollerstellen', $veranstaltung->id)}}"><h3>Umfrage erstellen</h3></a>
</div>
<div class="col-md-6">
    <h2 id="Comment">Kommentare</h2>

    <form action={{action('CommentController@store')}} method="post">
        {{csrf_field()}}
        <textarea size="5" rows="5" name="comment"></textarea>
        <input type="hidden" name="ID" value="<?php echo $id?>">
    <button type="submit">Senden</button>
</form>
    @foreach( $Comment as $comment)
        <h1>{{ $comment->Username }} Datum: {{ $comment->created_at }}</h1>
        <p>{{  $comment->Comment }}</p>
    @endforeach
</div>
</div>
    @endforeach
@endsection