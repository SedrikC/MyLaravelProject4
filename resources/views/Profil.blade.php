@extends('layouts.Startseite')

@section('content')

    <h1>Mein Profil</h1>

<p> hier stehen sachen von meinem Profil</p>
    <?php

    ?>
    <p>
        <ul>
        <li>Name</li>
        <li>Nachname</li>
        <li>lalala</li>
    </ul>
    </p>
    <h1>FILE UPLOAD</h1>
    <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
        <label>Füge ein Profilbild hinzu</label><br>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Upload" name="submit">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form>

@endsection