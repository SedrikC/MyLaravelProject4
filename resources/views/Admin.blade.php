@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Willkommen auf der Admin Seite!</h1>



        <div class="col-md-8 col-sm-12 Ergebnis">
            @foreach($Vsuchen as $vsuchen)
               <table>
                   <form action={{action('RessourceController@admin_veranstaltungen_loeschen')}}>
                  <h1 id="VerName"> {{ $vsuchen->Name }}</h1></a>
                   <td id="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
                   <td id="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
                   <td id="VerInfo">Genre: {{ $vsuchen->Genre }}</td>
                   <td id="VerInfo">Datum: {{ $vsuchen->Datum }}</td>
                       <input type="hidden" value="{{ $vsuchen->id }}" name="VerID">
                   <td><button class="btn btn-danger">Löschen</button></td>
                   </form>
               </table>
            @endforeach
        </div>

        </div>
    </div>

@endsection