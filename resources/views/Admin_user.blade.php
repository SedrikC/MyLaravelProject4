@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Willkommen auf der Admin Seite zur User Bearbeitung!</h1>


<div class="col-md-9 profilinhalt">

        @foreach($Daten as $daten)


        <form action={{action('RessourceController@admin_user_loeschen')}}>
               Benutzername:
               {{ $daten->name }}
Name:
                {{ $daten->lastName }}


               Vorname:
                {{ $daten->firstName }}
            Geburtstag:
               {{ $daten->geburtsdatum }}
            Geschlecht:
               {{ $daten->geschlecht }}
                PLZ:
                {{ $daten->plz }}
        <form action={{action('RessourceController@admin_user_loeschen')}}>
            <input type="hidden" value="{{ $daten->id }}" name="UserID">
            <td><button class="btn btn-danger">Löschen</button></td>
        </form>

</div>
            @endforeach








@endsection