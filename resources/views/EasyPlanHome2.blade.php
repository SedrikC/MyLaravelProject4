@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/EasyPlanHome.css">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 Rahmen">
            <a href ="{{route('profil')}}">
                <img src="img/Profil.jpg" class="Bild" alt="Mein Profil">
                 <p class="Titel">Mein Profil</p>
            </a>
        </div>

        <div class="col-md-6 col-sm-6 Rahmen">
            <a href ="{{route('my_veranstaltungen')}}">
                <img src="img/MeineVeranstaltung.jpg" class="Bild" alt="Meine Veranstaltungen">
                 <p class="Titel">Meine Veranstaltungen</p>
            </a>
        </div>

        <div class="col-md-6 col-sm-6 Rahmen">
            <a href ="{{route('suchen')}}">
                <img src="img/SuchenH.jpg" class="Bild" alt="Suchen">
                 <p class="Titel">Veranstaltung suchen</p>
            </a>
        </div>

        <div class="col-md-6 col-sm-6 Rahmen">
            <a href ="{{route('erstellen')}}">
                <img src="img/Erst.jpg" class="Bild" alt="Erstellen">
                <p class="Titel">Veranstaltung erstellen</p>
            </a>
        </div>
    </div>
</div>

@endsection