<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>EasyPlan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Startseitecss.css">
    <!--  <link rel="stylesheet" href="pfad-zur-css-datei/font-awesome.min.css">-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="Startseite.html"><img src="Logo-EasyPlan.gif" alt="Bild" class="Logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" id="Home" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mein Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="VSerstellen.html">Veranstaltung erstellen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="VSsuchen.html">Veranstaltung suchen</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('login') }}">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrieren</button>
        </form>
    </div>
</nav>


@yield('content')


<!--Footer-->
<footer class="page-footer font-small unique-color-dark pt-0">

    <div style="background-color: #568BFF;">
        <div class="foot container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h2 class="mb-0 white-text">Folgt und auf unseren sozialen Netzwerken</h2>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-lg-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-lg-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>EasyPlan</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="foot">EasyPlan ist eine Webapplikation die im Rahmen des Moduls Webtech entwicklet wird. Die Webapplikation soll dazu dienen den Nutzern die Organisation von Veranstaltungen leichter zu machen</p>
            </div>
            <!--/.First column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="foot">
                    <a href="#!">Mein Account</a>
                </p>
                <p class="foot">
                    <a href="#!">Impressum</a>
                </p>
                <p class="foot">
                    <a href="#!">Datenschutzrichtlinien</a>
                </p>
                <p class="foot">
                    <a href="#!">Kontakt</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="foot">
                    <i class="fa fa-home mr-3"></i> Easyplan </p>
                <p class="foot">
                    <i class="fa fa-envelope mr-3"></i>scirzel@gmail.com</p>
                <p class="foot">
                    <i class="fa fa-phone mr-3"></i>Tel. 07424/502500</p>
                <p class="foot">
                    <i class="fa fa-print mr-3"></i>Mobil. 01761234569</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
</footer>
<!--/.Footer-->
</body>
</html>