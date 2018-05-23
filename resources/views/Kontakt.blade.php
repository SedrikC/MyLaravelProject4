@extends('layouts.Startseite')

@section('content')
    <link rel="stylesheet" href="css/Kontakt.css">

    <h1>Kontakt</h1>

     <div class="container">

        <div class="row Kontakt">
            <div class="col-md-3 Sedrik_bild">
                <img src="/uploads/avatar/sedrik.jpg">
            </div>

            <div class="col-md-3 Sedrik">
                <ul>
                    <li><b> Sedrik Cirzel</b></li>
                    <li><i class="fa fa-btn fa-home"></i>Rheingutstrasse 36</li>
                    <li><i class="fa fa-btn fa-map-marker"></i> 78546 Konstanz</li>
                    <br>
                    <li><i class="fa fa-btn fa-envelope"></i>sedrik@gmail.com</li>
                    <li><i class="fa fa-btn fa-phone"></i> 0176 1234579</li>
                </ul>
            </div>

            <div class="col-md-3 Dominik_bild">
                <img src="/uploads/avatar/Bewerbungsbild.jpg">
            </div>

            <div class="col-md-3 Dominik">
               <ul>
                   <li><b> Dominik Burkert</b></li>
                   <li><i class="fa fa-btn fa-home"></i>Rheingutstrasse 36</li>
                   <li><i class="fa fa-btn fa-map-marker"></i> 78546 Konstanz</li>
                   <br>
                   <li><i class="fa fa-btn fa-envelope"></i>burkert@gmail.com</li>
                   <li><i class="fa fa-btn fa-phone"></i> 0176 1234579</li>
               </ul>
            </div>
        </div>
    </div>

@endsection