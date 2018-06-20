@extends('layouts.Startseite')

@section('content')
<head>

</head>
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
                <img src="img/WillkommenC.jpg" class="bilder" alt="Suchen">
                <div class="carousel-caption">
                    <h3  class="caption">Willkommen auf Easyplan</h3>
                    <p class="caption2">Organisieren sie Ihre Veranstaltungen <strong>einfach</strong> und <strong>zuverlässig</strong></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ErstellenC.jpg" class="bilder" alt="Erstellen">
                <div class="carousel-caption">
                    <h3  class="caption">Veranstaltungen erstellen</h3>
                    <p class="caption2">Erstellen Sie ihre persönliche <strong>Veranstatungen</strong></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/SuchenC.jpg" class="bilder" alt="Erstellen">
                <div class="carousel-caption">
                <h3  class="caption">Veranstaltungen suchen</h3>
                    <p class="caption2">Finen Sie <strong>Veranstatungen</strong> in ihrer <strong>Umgebung</strong></p>
                </div>
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
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-sm-12">
        <h1 id="AboutUs">Über uns</h1>
<p class="text">Wir sind ein junges EntwicklerTeam, das im Rahmen der Veranstaltung WebTechnologien die Webapplikation Easyplan entwickelt haben.<br>
    Mit EasyPlan soll es Veranstaltern und Teilnehmern von mittelgroßen Veranstaltungen erleichtert werden, diese zu organisieren<br>
    Hierbei dient EasyPlan als Platform zur Kommunikation zwischen den Teilnehmern, über Umfragen oder Kommentare.
</p>
    </div>
    <div class="col-md-6 hidden-sm">
        <img src="img/Berrys.jpg" class="Pic" alt="Bild">
    </div>

        <div class="col-md-6 col-sm-12">
            <img src="img/Funktionsumfang.jpg" class="Pic2" alt="Bild">
        </div>
        <div class="col-md-6 col-sm-12">
            <h1 id="AboutUs">Funktionsumfang</h1>
            <p class="text">EasyPlan bietet Ihnen zahlreiche Features, die Ihnen das organisieren Ihrer Veranstaltung erleichtern. <br>
                Neben dem Erstellen und Suchen von Veranstaltungen, können Sie Umfragen erstellen und Ihren Freunden per Abstimmung mitteilen ob Sie an
                der Veranstaltung teilnehmen. Darüber hinaus bietet Ihnen die Kommentarfunktion die Möglichkeit weitere offene Themen für alle sichtbar zu Besprechen.
            </p>
        </div>
        <div class="col-md-6 col-sm-12">
            <h1 id="AboutUs">Viel Spaß!</h1>
            <p class="text">
                Kommunizieren Sie mit Ihren Freunden und Bekannten in Form von Chats und Umfragen um so Ihre perfekte Veranstaltung zu organisieren.
                Bleiben Sie alle durch nur einen Blick auf ihre Veranstaltung auf dem selben Informationsstand um nichts zu verpassen.
                EasyPlan wünscht Ihnen einen angenehmen Umgang mit unserer Webapplikation und <br><strong>viel Spaß bei Ihrer Veranstaltung!</strong>
            </p>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="img/VielSpass.jpg" class="Pic" alt="Bild">
        </div>
        </div>
          </div>
    </div>


@endsection