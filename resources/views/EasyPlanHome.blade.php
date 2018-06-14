@extends('layouts.Startseite')

@section('content')

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Suchen.jpg" class="bilder" alt="Suchen">
            </div>
            <div class="carousel-item">
                <img src="img/Erstellen.jpg" class="bilder" alt="Erstellen">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>



    <div class="inhalt">
        <p> Bei der Organisation von mittelgroßen Veranstaltungen treten oft sehr viele Probleme auf, die die Planung und Durchführung oft sehr umständlich und kompliziert machen.</p>
        <p>
            Klassische Probleme währen, dass nicht alle Teilnehmer auf dem gleichen Informationsstand sind, da Dinge in Abwesenheit von Teilnehmern besprochen wurden oder Teilnehmer Nachrichten
            in (WhatsApp-)Gruppen überlesen haben.</p>
        <p> Es kann vorkommen dass Dinge vergessen wurden, oder Missverständnisse zwischen den Teilnehmern entstehen bzw. nicht jeder weiß wer an der Veranstaltung teilnimmt oder bereits abgesagt hat.</p>

        <p> Diese Probleme sollen mit EasyPlan gelöst werden. Es soll jeder Teilnehmer über eine zentrale Organisationsseite auf dem gleichen Informationsstand sein.</p>
        <p>Es sollen Notizen gemacht werden können, Termine durch Umfragen ermittelt werden können und die anderen Teilnehmer über Zu- oder Absagen informiert werden können.</p>
    </div>
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


    </div>


@endsection