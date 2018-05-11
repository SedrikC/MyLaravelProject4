@extends('layouts.Startseite')

@section('content')

    <h1>Veranstaltung erstellen</h1>


    <div id="AuswahlErstellen">
        <div class="Container" class="col-md-4>
        Veranstaltungsname
        <br>
        <input type="text" size="24px" maxlength="30" name="Veranstaltungsname">
        <br>
        Veranstaltungsort
        <br>
        <input type="text" size="24px" maxlength="20" name="Veranstaltungsort">
        <br>
        Genre
        <br>
        <select size="1" name="Gerne">
            <option>Party</option>
            <option>Sport</option>
            <option>Mimimi ich suche Freunde</option>
            <option>Sonstiges</option>
        </select>
        <input type="submit" name="WeiterButton" value="Weiter">
    </div>
    </div>

@endsection