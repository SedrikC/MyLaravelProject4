@extends('layouts.Startseite')

@section('content')
<head>
 <!--   <link rel="stylesheet" href="css/Erstellen.css"> .-->
    <link rel="stylesheet" href="css/Admin.css">
</head>
    <h1> Was möchsten Sie bearbeiten?</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <a href="{{URL('admin_user')}}">
                <img src="img/u_loeschen.jpg" class="admin_img" />
                <p class="admin_beschreibung">User löschen</p>
            </a>
        </div>
        <div class="col-sm-6 col-md-6">

            <a href="{{URL('admin_veranstaltungen')}}">
                <img src="img/veranstaltungen_loeschen.jpg" class="admin_img" />
                <p class="admin_beschreibung">Veranstaltungen löschen</p>
            </a>
        </div>

    </div>
</div>




@endsection