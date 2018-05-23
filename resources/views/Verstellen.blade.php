@extends('layouts.Startseite')

@section('content')

    <h1>Veranstaltung erstellen</h1>


    <div id="AuswahlErstellen">
        <div class="Container" class="col-md-4 col-sm-12">
        Veranstaltungsname
        <br>
        <input type="text" size="24px" maxlength="30" name="Veranstaltungsname" placeholder="z.B. Grillparty">
        <br>
        Veranstaltungsort
        <br>
        <input type="text" size="24px" maxlength="20" name="Veranstaltungsort" placeholder="z.B. Konstanz">
        <br>
        Genre
        <br>
        <select size="1" name="Gerne">
            <option>Party</option>
            <option>Sport</option>
            <option>Mimimi ich suche Freunde</option>
            <option>Sonstiges</option>
        </select>
            <br>
        <input id="weiter" type="submit" name="WeiterButton" value="Weiter">
    </div>
    </div>

@endsection