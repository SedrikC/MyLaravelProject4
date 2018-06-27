@extends('layouts.Startseite')

@section('content')

    <link rel="stylesheet" href="css/Profile.css">
    <link rel="stylesheet" href="css/Mein_Profil.css">
    <div>

        <div class="container">
            <h1>Profil bearbeiten</h1>
            <h1 class="BildBearbeiten">{{Auth::user()->name}}</h1>
            <div class="row">

                <div class="col-md-12 BildBearbeiten">

                    <?php
                    $avatar = Auth::user()->avatar;
                    if ($avatar == NULL){?>
                    <img src="/uploads/avatar/avatar_default.png" id="Profilbild">
                    <?php } else {
                    ?>
                    <img src="/uploads/avatar/{{Auth::user()->avatar}}" id="Profilbild">
                    <?php } ?>
                    <h2>{{ Auth::user()->name }}'s Profile</h2>
                    <form enctype="multipart/form-data" action="/profile" method="post">
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                </div>

                <div>

                    <form action="/insert" method="post">

                        <div id="Tabelle">
                            {{csrf_field()}}

                            <table>

                                <tr>
                                    <td>First Name:</td>
                                    <td><input type="text" name="firstName" class="form-control form"
                                               value="{{Auth::user()->firstName}}"></td>
                                </tr>

                                <tr>
                                    <td>Last Name:</td>
                                    <td><input type="text" name="lastName" class="form-control form"
                                               value="{{Auth::user()->lastName}}"></td>
                                </tr>

                                <tr>
                                    <td>Geburtsdatum</td>
                                    <td><input type="date" name="geburtsdatum" class="form-control form"
                                               value={{Auth::user()->geburtsdatum}}></td>
                                </tr>
                                <tr>
                                    <td>Geschlecht</td>
                                    <br>
                                    <td>
                                        <input type="radio" name="geschlecht" value="male">
                                        <label for="male">männlich</label>
                                        <input type="radio" name="geschlecht" value="female">
                                        <label for="female">weiblich</label>
                                    </td>
                                    <br>

                                <tr>
                                    <td>Ort</td>
                                    <td><input type="text" name="ort" class="form-control form"
                                               value="{{Auth::user()->ort}}"></td>
                                </tr>
                                <tr>
                                    <td>Postleitzahl</td>
                                    <td><input type="text" name="plz" class="form-control form"
                                               value="{{Auth::user()->plz}}"></td>
                                </tr>
                                <tr>
                                    <td>Strasse</td>
                                    <td><input type="text" name="strasse" class="form-control form"
                                               value="{{Auth::user()->strasse}}"></td>
                                </tr>
                                <!--
                                 <tr>
                                     <td>Email</td>
                                     <td><input type="text" name="email"> </td><br>
                                 </tr>
                                 -->
                                <tr>
                                    <td>Mobile</td>
                                    <td><input type="text" name="mobile" class="form-control form"
                                               value="{{Auth::user()->mobile}}"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="submit" value="Speichern"
                                               class="pull-right btn btn-sm btn-primary submit"></td>

                                </tr>

                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection