@extends('layouts.Startseite')

@section('content')
    <head>
        <link rel="stylesheet" href="css/Erstellen.css">
    </head>
    <h1>Veranstaltung erstellen</h1>
    <div id="AuswahlErstellen">
        <form action={{action('Controller@insert_veranstaltungen1')}}>
            {{csrf_field()}}
            Veranstaltungsname*<br>
            <input type="text" size="20px" id="Name" name="Name" placeholder="z.B. Grillparty" maxlength="20" required>
            <br id="Output">
            Veranstaltungsort
            <br>
            <input type="text" size="20px" maxlength="20" name="Ort" placeholder="z.B. Konstanz">
            <input id="weiter" type="submit" name="submit" value="Weiter" class="btn btn-primary">
        </form>
    </div>
@endsection