@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1>Veranstaltung erstellen</h1>


    <div id="AuswahlErstellen">
        <div class="Container" class="col-md-4 col-sm-12">
            Datum
            <input type="date" size="24px" name="Datum">
            <input id="weiter" type="submit" name="WeiterButton" value="Erstellen">
        </div>
    </div>
<form action="/StoreComment" method="post">
    <textarea size="5" rows="5" name="comment"></textarea>
    <input name="ID">
    <br>
    <button type="submit">Senden</button>
</form>

@endsection