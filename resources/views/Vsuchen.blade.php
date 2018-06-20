@extends('layouts.Startseite')

@section('content')
<head>
    <link rel="stylesheet" href="css/Erstellen.css">
</head>
    <h1>Veranstaltung suchen</h1>

    <div class="Container">
        <div class="row">
        <div class="col-md-3 col-sm-12">
            <div id="AuswahlSuchen">
                    <label for="Veranstaltungsname">Veranstaltungsname</label><br>
                <input type="text" size="24px" maxlength="30" onkeyup="search()" name="Veranstaltungsname" id="VeranstaltungsName" placeholder="z.B. Grillparty"><br>
                <label for="Veranstaltungsort">Veranstaltungsort</label><br>
                <input type="text" size="24px" maxlength="20" onkeyup="search()" name="Veranstaltungsort" id="VerOrt" placeholder="z.B. Konstanz"><br>
                    <label for="Veranstalter">Veranstalter</label><br>
                    <input type="text" size="24px" maxlength="20" onkeyup="search()" name="Veranstalter" id="Veranstalter" placeholder="z.B. Cristiano Ronaldo"><br>
                    <label for="Genre">Genre</label><br>
                <select size="1" id="genre" onchange="search()" name="Genre">
                    <option label=""></option>
                    <option label="Party">Party</option>
                    <option label="Sport">Sport</option>
                    <option label="Öffentlich">Öffentlich</option>
                    <option label="Sonstige">Sonstiges</option>
                </select>
                    <br>
            </div>
        </div>
        <div id="Ajax" class="col-md-9 col-sm-12 Ergebnis">
            @foreach($Vsuchen as $vsuchen)
               <table>
                   <a href="{{route('Veranstaltung',$vsuchen->id)}}"> <h1 id="VerName"> {{ $vsuchen->Name }}</h1></a>
                   <td class="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
                   <td class="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
                   <td class="VerInfo">Genre: {{ $vsuchen->Genre }}</td>
                   <td class="VerInfo">Datum: {{ $vsuchen->Datum }}</td>
               </table>
            @endforeach
        </div>
        </div>
    </div>
<script type="text/javascript">
    function search() {
        $('#Ajax').load('/suchen/ajax?Veranstaltungsname=' + $('#VeranstaltungsName').val() + '&Veranstaltungsort=' + $('#VerOrt').val() + '&Veranstalter=' + $('#Veranstalter').val() + '&Genre=' + $('#genre').val());
    }
</script>
@endsection