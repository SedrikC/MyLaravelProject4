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
                <select size="1" id="genre" name="Gerne">
                    <option>Party</option>
                    <option>Sport</option>
                    <option>Öffentlich</option>
                    <option>Sonstiges</option>
                </select>
                    <br>
                    <button type="submit" id="weiter"> Suchen</button>
                </form>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 Ergebnis">
            @foreach($Vsuchen as $vsuchen)
               <table>
                   <a href ="{{route('VProfil', $vsuchen->id)}}"> <h1 id="VerName"> {{ $vsuchen->Name }}</h1></a>
                   <td id="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
                   <td id="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
                   <td id="VerInfo">Genre: {{ $vsuchen->Genre }}</td>
               </table>
            @endforeach
        </div>
        </div>
    </div>

@endsection