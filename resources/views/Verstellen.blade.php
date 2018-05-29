@extends('layouts.Startseite')

@section('content')

    <h1>Veranstaltung erstellen</h1>

    <form action="/insert_veranstaltungen1" method="post">
        {{csrf_field()}}
        Veranstaltungsname<br>

        <input type="text" size="24px" maxlength="30" name="Name" placeholder="z.B. Grillparty">
        <br>
        Veranstaltungsort
        <br>
        <input type="text" size="24px" maxlength="20" name="Ort" placeholder="z.B. Konstanz">
        <br>
        Veranstalter <br>
        <input type="text" size="24px" maxlength="20" name="Veranstalter" placeholder="z.B. Dominik">
        <br>
        Datum<br>
                <input type="date" size="24px"name="datum"> <br>

               <input type="submit" name="submit" value="Add">


   <!-- <div id="AuswahlErstellen">
        <div class="Container" class="col-md-4 col-sm-12">
        Veranstaltungsname
        <br>
        <input type="text" size="24px" maxlength="30" name="Veranstaltungsname" placeholder="z.B. Grillparty">
        <br>
        Veranstaltungsort
        <br>
        <input type="text" size="24px" maxlength="20" name="Veranstaltungsort" placeholder="z.B. Konstanz">
        <br>
            <!-- Genre
             <br>
             <select size="1" name="Genre">
                 <option>Party</option>
                 <option>Sport</option>
                 <option>Mimimi ich suche Freunde</option>
                 <option>Sonstiges</option>
             </select>
             -->
        <!--
            <p>
            <div class="Container" class="col-md-4 col-sm-12">
                Datum
                <input type="date" size="24px" name="Datum">
            </div>
        </div>
        </p>
            </p>
        <input type="submit" name="submit" value="Add">
    <!--
            <a href="{{route('erstellen2')}}"><input id="weiter" type="submit" name="WeiterButton" value="Weiter"></a>
            </div>
    </div>
    -->

    </form>
@endsection