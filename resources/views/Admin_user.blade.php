@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Willkommen auf der Admin Seite zur User Bearbeitung!</h1>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
<div class="col-md-10 col-sm-12 Ergebnis">
    @foreach($Daten as $daten)

            <form action={{action('RessourceController@admin_user_loeschen')}}>
                <h1 id="VerName"> {{ $daten->name }}</h1>
<table class="tabelle">
    <tr>
    <td class="VerInfo"> Vorname: {{ $daten->firstName }}</td>
    <td class="VerInfo">Nachname: {{ $daten->lastName }}</td>
    <td class="VerInfo">Geschlecht: {{ $daten->geschlecht }}</td>
    <td class="VerInfo">Postleitzahl: {{ $daten->plz }}</td>
    </tr>
</table>
                <input type="hidden" value="{{ $daten->id }}" name="UserID">
                <button class="btn btn-danger loeschen">Löschen</button>

            </form>

    @endforeach

</div>
    </div>

</div>


@endsection