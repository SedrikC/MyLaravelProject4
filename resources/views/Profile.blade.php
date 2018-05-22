@extends('layouts.Startseite')

@section('content')

    <div>
        <ul>
            <li>
                <div class="container">
                <h1>Profilbild bearbeiten</h1>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="/uploads/avatar/avatar_default.jpg" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        <h2>{{ Auth::user()->name }}'s Profile</h2>
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                    </div>
                </div>
                </div>
            </li>
            <li>
                <h1>Geburtstag</h1>
            </li>

            <li>
                <h1>Geschlecht</h1>
            </li>

            <li>
                <h1>Wohnort</h1>

            </li>
            <li>
                <h1>
                    E-mail-Adresse ändern
                </h1>
            </li>

            <li>
                <h1>Passwort ändern</h1>
            </li>
        </ul>
    </div>

@endsection