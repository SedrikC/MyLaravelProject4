@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Willkommen auf der Admin Seite zur User Bearbeitung!</h1>


<div class="col-md-9 profilinhalt">

    <table>
            <br>
            <tr>
                <td class="VerInfo2">Username</td>
                <td class="VerInfo2">Name</td>
                <td class="VerInfo2">Vorname</td>
                <td class="VerInfo2">Geschlecht</td>
                <td class="VerInfo2">Postleitzahl</td>
            </tr>
    </table>
        @foreach($Daten as $daten)
        <form action={{action('RessourceController@admin_user_loeschen')}}>
        <table class="user">
            <tr>
            <th class="VerInfo2">{{ $daten->name }}</th>
            <td class="VerInfo2">{{ $daten->lastName }}</td>
            <td class="VerInfo2">{{ $daten->firstName }}</td>
            <td class="VerInfo2">{{ $daten->geschlecht }}</td>
            <td class="VerInfo2">{{ $daten->plz }}</td>
            <input type="hidden" value="{{ $daten->id }}" name="UserID">
            <td><button class="btn btn-danger">Löschen</button></td>
            </tr>
        </table>
        </form>
</table>
</div>
            @endforeach








@endsection