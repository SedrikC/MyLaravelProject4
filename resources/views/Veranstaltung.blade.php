@extends('layouts.Startseite')

@section('content')

<h1>Veranstaltungen</h1>

    @foreach( $Events as $veranstaltung)
        <h2>Veranstaltungsname: {{ $veranstaltung->Name }}</h2>
        <h2>Veranstaltungsort: {{ $veranstaltung->Ort }}</h2>
        <h2>Veranstalter:  {{ $veranstaltung->Veranstalter }}</h2>
    @endforeach
<br>
<div class="row">
<div class="col-md-6">
<h2>Umfragen</h2>
</div>
<div class="col-md-6">
    <h2 id="Comment">Kommentare</h2>
<form action="Veranstaltung.blade.php">
<textarea size="5" rows="5"></textarea>
    <br>
    <button type="submit">Senden</button>
</form>
</div>
</div>
@endsection