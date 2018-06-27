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
                    <input type="text" size="24px" maxlength="30" name="Veranstaltungsname"
                           id="VeranstaltungsName" placeholder="z.B. Grillparty"><br>
                    <label for="Veranstaltungsort">Veranstaltungsort</label><br>
                    <input type="text" size="24px" maxlength="20" name="Veranstaltungsort"
                           id="VerOrt" placeholder="z.B. Konstanz"><br>
                    <label for="Veranstalter">Veranstalter</label><br>
                    <input type="text" size="24px" maxlength="20" name="Veranstalter"
                           id="Veranstalter" placeholder="z.B. Cristiano Ronaldo"><br>
                    <label for="Genre">Genre</label><br>
                    <select size="1" id="genre" name="Genre">
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
                @foreach($Vsuchen as $r)
                    <table class="table">
                        <tbody>
                        <tr>
                            <td></td>
                            <td><a href="{{route('Veranstaltung',$r->id)}}"><h1 class="VerName"> {{ $r->Name }}</h1></a>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="VerInfo"> Veranstaltungsort: {{$r->Ort}} </td>
                            <td class="VerInfo">Veranstalter: {{$r->Veranstalter}} </td>
                            <td class="VerInfo Info">Genre: {{$r->Genre}}</td>
                            <td class="VerInfo Info">Datum: {{$r->Datum}}</td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">

        $(document).ready(function () {
            $("input, select").on("input", function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "suchen/ajax",
                    data: {
                        'Veranstaltungsname': $('#VeranstaltungsName').val(),
                        'Veranstaltungsort': $('#VerOrt').val(),
                        'Veranstalter': $('#Veranstalter').val(),
                        'Genre': $('#genre').val()
                    },
                    success: function (result) {
                        $("#Ajax").html(result);
                    }
                });
            });
        });
    </script>
@endsection