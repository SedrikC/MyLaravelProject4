@foreach($Vsuchen as $vsuchen)
    <table>
        <a href="{{route('Veranstaltung',$vsuchen->id)}}"> <h1 id="VerName"> {{ $vsuchen->Name }}</h1></a>
        <td class="VerInfo"> Veranstaltungsort: {{ $vsuchen->Ort }}</td>
        <td class="VerInfo">Veranstalter: {{ $vsuchen->Veranstalter }}</td>
        <td class="VerInfo">Genre: {{ $vsuchen->Genre }}</td>
        <td class="VerInfo">Datum: {{ $vsuchen->Datum }}</td>
    </table>
@endforeach