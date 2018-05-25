@extends('layouts.Startseite')

@section('content')

    <link rel="stylesheet" href="css/Mein_Profil.css">

    <h1>Profil bearbeiten</h1>
    <h1> {{Auth::user()->name }}'s Profil</h1>
    <h2>{{ Auth::user()->name }}'s Profile</h2>



    <div class="container">

        <div class="row Mein_Profil">
            <div class="col-md-2" id="bild">

                <img src="/uploads/avatar/avatar_default.jpg" id="Profilbild">
                Profilbild ändern
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-9 profilinhalt">
                <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Vorname</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Geburtstag</td>
                        <td>-</td>
                    </tr>

                    <tr>
                    <tr>
                        <td>Geschlecht</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Addresse</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                    </tr>
                    <td>Handynummer</td>
                    <td>-
                    </td>

                    </tr>

                    </tbody>
                </table>

                <div class="container">

                    <div class="row">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4">
                <a href="#" class="btn btn-primary">Profil bearbeiten </a><p></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">


            </div>
        </div>
    </div>


@endsection