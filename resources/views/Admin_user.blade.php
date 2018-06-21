@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Willkommen auf der Admin Seite zur User Bearbeitung!</h1>


<div class="col-md-8 col-sm-12 Ergebnis">
    @foreach($Daten as $daten)
        <table>
            <form action={{action('RessourceController@admin_user_loeschen')}}>
                <h1 id="VerName"> {{ $daten->name }}</h1></a>
                <td class="VerInfo"> Vorname: {{ $daten->firstName }}</td>
                <td class="VerInfo">Nachname: {{ $daten->lastName }}</td>
                <td class="VerInfo">Geschlecht: {{ $daten->geschlecht }}</td>
                <td class="VerInfo">Postleitzahl: {{ $daten->plz }}</td>
                <input type="hidden" value="{{ $daten->id }}" name="UserID">
                <td><button class="btn btn-danger">Löschen</button></td>
            </form>
        </table>
    @endforeach
</div>



@endsection