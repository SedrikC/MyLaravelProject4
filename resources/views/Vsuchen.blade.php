@extends('layouts.Startseite')

@section('content')

    <h1>Veranstaltung suchen</h1>

    <div class="Container">
        <div class="row">
        <div class="col-md-3 col-sm-12">
            <div id="AuswahlSuchen">
                <form action="/suchen">
                    <label for="Veranstaltungsname">Veranstaltungsname</label>
                <input type="text" size="24px" maxlength="30" name="Veranstaltungsname" placeholder="z.B. Grillparty">
                <label for="Veranstaltungsort">Veranstaltungsort</label>
                <input type="text" size="24px" maxlength="20" name="Veranstaltungsort" placeholder="z.B. Konstanz">
                    <label for="Veranstalter">Veranstalter</label>
                    <input type="text" size="24px" maxlength="20" name="Veranstalter" placeholder="z.B. Cristiano Ronaldo">
                    <br>
                    <label for="Genre">Genre</label>
                    <br>
                    <select size="1" name="Genre">
                        <option>Party</option>
                        <option>Sport</option>
                        <option>Mimimi ich suche Freunde</option>
                        <option>Sonstiges</option>
                </select>
                    <button type="submit"> Suchen</button>
                </form>
            </div>
        </div>

        <div class="col-md-8 col-sm-12 Ergebnis">
            @foreach($Vsuchen as $vsuchen)
               <table>
                <h1 id="VerName"> {{ $vsuchen->Name }}</h1>
                <td id="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
                   <td> | </td>
                   <td id="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
               </table>
            @endforeach

        </div>

        </div>
    </div>

@endsection