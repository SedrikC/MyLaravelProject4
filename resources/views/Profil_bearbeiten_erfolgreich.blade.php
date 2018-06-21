@extends('layouts.Startseite')

@section('content')

    <link rel="stylesheet" href="css/Mein_Profil.css">
    <link rel="stylesheet" href="css/Admin.css">

    <h1>Profil bearbeiten war erfolgreich</h1>


    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <a href="{{URL('profile')}}">
                    <img src="/uploads/avatar/avatar_default.png" class="admin_img" />
                    <p class="admin_beschreibung">Profil bearbeiten</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-6">

                <a href="{{URL('profil')}}">
                    <img src="img/MeineVeranstaltung.jpg" class="admin_img" />
                    <p class="admin_beschreibung">Mein Profil</p>
                </a>
            </div>

        </div>
    </div>



@endsection