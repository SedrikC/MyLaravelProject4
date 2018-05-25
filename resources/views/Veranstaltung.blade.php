@extends('layouts.Startseite')

@section('content')
    <head>
        <link rel="stylesheet" href="css/Startseitecss.css">
        <link rel="stylesheet" href="css/Erstellen.css">
    </head>

<h1>Veranstaltungen</h1>

    @foreach( $Veranstaltung as $veranstaltung)
        <h2>Veranstaltungsname: {{ $veranstaltung->Name }}</h2>
        <h2>Veranstaltungsort: {{ $veranstaltung->Ort }}</h2>
        <h2>Veranstalter:  {{ $veranstaltung->Veranstalter }}</h2>
    @endforeach


@endsection