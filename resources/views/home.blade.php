@extends('layouts.Startseite')

@section('content')

    <div id="suchen_erstellen">

        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="suchen col-md-5 col-sm-12">
                    <a href ="{{route('suchen')}}">
                        <img src="img/Suchen.jpg" class="bilder" width="100%" alt="Suchen">
                        <p class="Text">
                            Veranstaltung suchen
                        </p>
                    </a>
                </div>



                <div class="erstellen col-md-5 col-sm-12">
                    <a href ="{{route('erstellen')}}">
                        <img src="img/Erstellen.jpg" class="bilder" width="100%" alt="Erstellen">
                        <p class="Text">
                            Veranstaltung erstellen
                        </p>
                    </a>
                </div>
            </div>
        </div>
@endsection
