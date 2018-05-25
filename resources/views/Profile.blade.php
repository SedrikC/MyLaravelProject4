@extends('layouts.Startseite')

@section('content')

    <link rel="stylesheet" href="css/Profile.css">
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
                <form action="/insert" method="post">
                    <tabel>
                        <tr>
                            {{csrf_field()}}
                            <td>First Name:</td>
                            <td><input type="text" name="firstName"> </td><br>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><input type="text" name="lastName"> </td><br>
                        </tr>

                        <tr>
                            <td>Geburtsdatum</td>
                            <td><input type="date" name="geburtsdatum"> </td><br>
                        </tr>
                        <tr>
                            <td>Geschlecht</td><br>
                            <td>
                                <input type="radio" name="geschlecht" value="male">
                                <label for="male">männlich</label>
                                <input type="radio" name="geschlecht" value="female">
                                <label for="female">weiblich</label>
                                <input type="radio" name="geschlecht" value="sonstiges">
                                <label for="sonstiges">sonstiges</label>
                            </td><br>

                        <tr>
                            <td>Ort</td>
                            <td><input type="text" name="ort"> </td><br>
                        </tr>
                        <tr>
                            <td>plz</td>
                            <td><input type="text" name="plz"> </td><br>
                        </tr>
                        <tr>
                            <td>Strasse</td>
                            <td><input type="text" name="strasse"> </td><br>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"> </td><br>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" name="mobile"> </td><br>
                        </tr>
                        <tr>

                            <td><input type="submit" name="submit" value="Add"> </td>
                        </tr>
                    </tabel>
                </form>
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