@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Mein_Profil.css">
</head>
    @foreach($Daten as $daten)
    <h1>Profil bearbeiten</h1>
    <h1> {{$daten->name }}'s Profil</h1>



    <div class="container">
        <div class="row Mein_Profil">
            <div class="col-md-9 profilinhalt">
                <table class="table table-user-information">
                        <tbody>
                        <tr>
                            <td>Benutzername</td>
                            <td>{{ $daten->name }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $daten->lastName }}</td>
                        </tr>
                        <tr>
                            <td>Vorname</td>
                            <td>{{ $daten->firstName }}</td>
                        </tr>
                        <tr>
                            <td>Geburtstag</td>
                            <td>{{ $daten->geburtsdatum }}</td>
                        </tr>

                        <tr>
                        <tr>
                            <td>Geschlecht</td>
                            <td>{{ $daten->geschlecht }}</td>
                        </tr>
                        <tr>
                            <td>PLZ</td>
                            <td>{{ $daten->plz }}</td>
                        </tr>
                        <tr>
                            <td>Ort</td>
                            <td>{{$daten->ort}} </td>
                        </tr>
                        <tr>
                            <td>Strasse</td>
                            <td> {{ $daten->strasse }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$daten->email}}</td>
                        </tr>
                        <td>Handynummer</td>
                        <td>{{ $daten->mobile }}
                        </td>

                        </tr>
                        @endforeach
                        </tbody></form>
                </table>

                <div class="container">

                    <div class="row">
                        <div class="col-md-8">

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">


            </div>
        </div>
    </div>


@endsection