@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Willkommen auf der Admin Seite!</h1>


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 col-sm-12 Ergebnis">
            @foreach($Vsuchen as $vsuchen)
                <form action={{action('RessourceController@admin_veranstaltungen_loeschen')}}>
                    <h1 id="VerName"> {{ $vsuchen->Name }}</h1>
                    <table class="tabelle">
                        <tr>
                            <td class="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
                            <td class="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
                            <td class="VerInfo">Genre: {{ $vsuchen->Genre }}</td>
                            <td class="VerInfo">Datum: {{ $vsuchen->Datum }}</td>
                        </tr>
                    </table>
                    <input type="hidden" value="{{ $vsuchen->id }}" name="VerID">
                    <button class="btn btn-danger loeschen">Löschen</button>
                </form>


            @endforeach
        </div></div></div>



@endsection