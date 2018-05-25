@extends('layouts.Startseite')

@section('content')

<h1>Veranstaltungen</h1>

    @foreach( $Veranstaltung as $veranstaltung)
        <h2>Veranstaltungsname: {{ $veranstaltung->Name }}</h2>
        <h2>Veranstaltungsort: {{ $veranstaltung->Ort }}</h2>
        <h2>Veranstalter:  {{ $veranstaltung->Veranstalter }}</h2>
    @endforeach


@endsection