@extends('layouts.Startseite')

@section('content')

    <h1>Veranstaltung suchen</h1>

    <div class="Container">
        <div class="col-md-3 col-sm-12">
            <div id="AuswahlSuchen">
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
                Datum
                <br>
                <input type="date" size="24px" name="Datum">
                <br>
                <input id="SuchenButton" type="submit" name="SuchenButton" value="Suchen">
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <p>Hier sollen irgendwann die Suchergebnisse stehen</p>
        </div>
    </div>

@endsection