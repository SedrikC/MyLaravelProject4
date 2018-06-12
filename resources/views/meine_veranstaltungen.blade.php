@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1> Meine Veranstaltungen</h1>



        <div class="col-md-8 col-sm-12 Ergebnis">
            @foreach($Vsuchen as $vsuchen)
               <table>
                  <h1 id="VerName"> {{ $vsuchen->Name }}</h1></a>
                   <td id="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
                   <td id="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
                   <td id="VerInfo">Genre: {{ $vsuchen->Genre }}</td>
                   <td id="VerInfo">Datum: {{ $vsuchen->Datum }}</td>
                   <td id="bearbeiten"><button>bearbeiten</button></td>
                   <td id="loeschen"><button>Löschen</button></td>
               </table>
            @endforeach
        </div>
        </div>
    </div>

@endsection