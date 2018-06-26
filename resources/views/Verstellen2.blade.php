@extends('layouts.Startseite')

@section('content')
    <head>
        <link rel="stylesheet" href="css/Erstellen.css">
    </head>
    <h1>Veranstaltung erstellen</h1>
    <div id="AuswahlErstellen">
        <form action={{action('Controller@insert_veranstaltungen2')}}>
            {{csrf_field()}}
            Genre
            <br>
            <select size="1" id="genre" name="Genre">
                <option label="Party">Party</option>
                <option label="Sport">Sport</option>
                <option label="Öffentlich">Öffentlich</option>
                <option label="Sonstige">Sonstiges</option>
            </select>
            <br>
            Datum
            <br>
            <input type="date" size="24px"name="datum"> <br>

            <input class="btn btn-primary" id="weiter" type="submit" name="submit" onclick="erfolgreich()" value="Erstellen">
            

    </div>
    </form>
@endsection