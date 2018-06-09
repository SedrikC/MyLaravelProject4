@extends('layouts.Startseite')

@section('content')
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#klick").click(function(){
                $(".o1").show();
            });
        });
    </script>
</head>
<h1>Umfrage zu ihrer Veranstaltung erstellen</h1>
<form action="/StorePoll" method="post">
    {{ csrf_field() }}
    <h2> Titel </h2>
    <input type="text" name="titel">

    <h3> Option 1</h3>
    <input type="text" name="option1">

    <h3> Option 2</h3>
    <input type="text" name="option2">

    <h3> Option 3</h3>
    <input type="text" name="option3">

    <h3> Option 4</h3>
    <input type="text" name="option4">

    <h3> Option 5</h3>
    <input type="text" name="option5">


<input type="hidden" name="VerID" value="<?php echo $id ?>">
    <button type="submit">Umfrage erstellen</button>
</form>
    @endsection

