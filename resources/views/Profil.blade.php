@extends('layouts.Startseite')

@section('content')

    <link rel="stylesheet" href="css/Mein_Profil.css">

    <h1> {{Auth::user()->name }}'s Profil</h1>



    <div class="container">

        <div class="row Mein_Profil">
            <div class="col-md-2 BildBearbeiten" id="bild">
                <?php
                $avatar = Auth::user()->avatar;
                if ($avatar == NULL){?>
                <img src="/uploads/avatar/avatar_default.png" id="Profilbild" alt="DefaultProfilbild">
                <?php } else {
                ?>
                <img src="/uploads/avatar/{{Auth::user()->avatar}}" id="Profilbild" alt="Profilbild">
                <?php } ?>


            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-9 profilinhalt">
                <table class="table table-user-information">
                    @foreach($Daten as $daten)

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


                            <td id="email">{{$daten->email}}</td>
                        </tr>
                        <td>Handynummer</td>
                        <td>{{ $daten->mobile }}
                        </td>
                        @endforeach
                        </tbody>
                </table>

                <div class="container">

                    <div class="row">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('profile') }}" class="btn btn-primary submit">Profil bearbeiten </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">


            </div>
        </div>
    </div>


@endsection