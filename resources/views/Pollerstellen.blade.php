@extends('layouts.Startseite')

@section('content')
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/css/PollErstellen.css">

    </head>
    <h1>Umfrage zu ihrer Veranstaltung erstellen</h1>
    <div id="PollErstellen">
        <form action="/StorePoll" method="post">
            {{ csrf_field() }}
            <h2> Titel* </h2>
            <input type="text" name="titel" required>

            <p> Option 1*</p>
            <input type="text" name="option1" maxlength="12" required>

            <p> Option 2*</p>
            <input type="text" name="option2" maxlength="12" required>

            <p> Option 3</p>
            <input type="text" maxlength="12" name="option3">

            <p> Option 4</p>
            <input type="text" maxlength="12" name="option4">

            <p> Option 5</p>
            <input type="text" maxlength="12" name="option5">


            <input type="hidden" name="VerID" value="<?php echo $id ?>">
            <button type="submit">Umfrage erstellen</button>
        </form>
    </div>
@endsection

