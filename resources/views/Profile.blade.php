@extends('layouts.Startseite')

@section('content')

    <link rel="stylesheet" href="css/Profile.css">
    <div>


                <div class="container">
                    <h1>Profil bearbeiten</h1>
                    <h1 class="BildBearbeiten">{{Auth::user()->name}}</h1>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 BildBearbeiten">
                        <img src="/uploads/avatar/{{Auth::user()->avatar}}" id="Profbild">
                        <h2>{{ Auth::user()->name }}'s Profile</h2>
                        <form enctype="multipart/form-data" action="/profile" method="post">
                            <label>Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                    </div>
                </div>
                <form action="/insert" method="post">
                    <div id="Tabelle">
                        {{csrf_field()}}
                    <table>
                        <tr>
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
                            </td><br>

                        <tr>
                            <td>Ort</td>
                            <td><input type="text" name="ort"> </td><br>
                        </tr>
                        <tr>
                            <td>Postleitzahl</td>
                            <td><input type="text" name="plz"> </td><br>
                        </tr>
                        <tr>
                            <td>Strasse</td>
                            <td><input type="text" name="strasse"> </td><br>
                        </tr>
                       <!--
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"> </td><br>
                        </tr>
                        -->
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" name="mobile"> </td><br>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Bearbeiten" class="pull-right btn btn-sm btn-primary"> </td>
                        </tr>
                    </table>
                    </div>
                </form>
                </div>
    </div>
    </div>

@endsection