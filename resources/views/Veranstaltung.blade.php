@extends('layouts.Startseite')

@section('content')
<h1>Veranstaltungen</h1>
    @foreach( $Events as $veranstaltung)
        <h2>Veranstaltungsname: {{ $veranstaltung->Name }}</h2>
        <h2>Veranstaltungsort: {{ $veranstaltung->Ort }}</h2>
        <h2>Veranstalter:  {{ $veranstaltung->Veranstalter }}</h2

<br>
<div class="row">
<div class="col-md-6">

    <h2>Teilnahme</h2>

<form action={{action('TeilnahmeController@store')}}>
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
    <form action={{action('PollController@like@like')}}>
        @foreach($Option as $option)
        <input type="radio" value="{{$option->optionid}}" onclick="this.form.submit()" name="optionID">{{$option->Name}} <br>
        @endforeach
    </form>
    @endforeach
    <?php if(empty($poll)){?>
    <a href ='{{route('Pollerstellen', $veranstaltung->id)}}'><h3>Umfrage erstellen</h3></a>
    <?php
    }?>


</div>
<div class="col-md-6">
    <h2 id="Comment">Kommentare</h2>
    <form method="POST" id="comment_form">
        {{csrf_field()}}
        <div><textarea size="5" rows="5" name="comment" id="comment" class="form-control" placeholder="Kommentar eingeben"></textarea></div>
        <input type="hidden" name="ID" value="<?php echo $id?>">
        <div><input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit"></div>
    </form>

    <span id="comment_message">Message</span>
    <br>
    <div id="display_comment">Content</div>
</div>
</div>
        @endforeach
@endsection