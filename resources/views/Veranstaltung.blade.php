@extends('layouts.Startseite')

@section('content')
    <head>
        <link rel="stylesheet" href="/css/VProfil.css">
    </head>
<h1>Veranstaltungen</h1>
    <div class="row">
        <div class="col-md-6">
            <h1 class="Header">Veranstaltungsinformationen</h1>

    @foreach( $Events as $veranstaltung)
        <table>
        <tr><th>Veranstaltungsname:</th><td> {{ $veranstaltung->Name }}</td></tr>
            <tr><th>Veranstaltungsort:</th><td> {{ $veranstaltung->Ort }}</td></tr>
            <tr><th>Veranstalter: </th><td><a href="{{route('UserProfil',$veranstaltung->Veranstalter)}}"><p> {{ $veranstaltung->Veranstalter }}</p></a></td></tr>
        </table>
<br>

    <h1 class="Header">Rückmeldungen</h1>
<form action={{action('TeilnahmeController@store')}}>
    {{csrf_field()}}
    @foreach($CheckTeilnahme as $check)
    @endforeach
    <?php if(empty($check)){?>
    Ja <input type="radio" name="answer" value="0" onclick="this.form.submit();">
    Nein<input type="radio" name="answer" value="1" onclick="this.form.submit();">
    <input type="hidden" name="VerID" value="<?php echo $id?>">
    <?php
    }?>

</form>

<table id="Teilnehmer">
    <tr><th class="Zusage">
            <?php echo count($Teilnahme)?> Teilnehmer:
        </th><td class="zusage">
    @foreach($Teilnahme as $teilnahme) {{$teilnahme->name}} @endforeach
        </td>
    </tr>
    <tr><th class="Absage">
    <?php echo count($Absagen)?> Absagen:
        </th><td class="absage">
    @foreach($Absagen as $absagen) {{$absagen->name}}@endforeach
    </tr>
</table>
    <br><br>
<h1 class="Header">Umfragen</h1>

    <br>
    @foreach($Poll as $poll)
      <h2 id="polltitel">{{$poll->Titel}}</h2>
    <form action={{action('LikeController@store')}}>
        {{csrf_field()}}
            @foreach($Option as $option)
                @foreach($CheckLike as $cl)
                @endforeach
            <?php if(empty($cl)){?>
            <input type="radio" value="{{$option->option}}" onclick="this.form.submit()" name="optionID">{{$option->Name}}<br>
                <?php
                }?>
        @endforeach


        <input type="hidden" value="{{$option->VerID}}" name="VerID">
    </form>
    @endforeach
    <?php if(empty($poll)){?>
    <a href ='{{route('Pollerstellen', $veranstaltung->id)}}'><h3>Umfrage erstellen</h3></a>
    <?php
    }?>
     <table id="poll">
         <thead id="thead">
         <th id="left">Optionen</th>
        @foreach($Option as $option)
        <th>{{$option->Name}}</th>
        @endforeach
        </thead>
     <tbody id="tbody">
     <th id="left">Teilnehmer</th>
     <td>
     @foreach($Like1 as $l1)
         {{$l1->Username}}<br>
     @endforeach
     </td>
     <td>
         @foreach($Like2 as $l2)
             {{$l2->Username}}<br>
         @endforeach
     </td>
     <td>
         @foreach($Like3 as $l3)
             {{$l3->Username}}<br>
         @endforeach
     </td>
     <td>
         @foreach($Like4 as $l4)
             {{$l4->Username}}<br>
         @endforeach
     </td>
     <td>
         @foreach($Like5 as $l5)
             {{$l5->Username}}<br>
         @endforeach
     </td>
     </tbody>
         <tfoot id="tfood">
         <th id="left">Anzahl</th>
         <td><?php if(count($Like1) == '0'){}else{echo count($Like1);}?></td>
         <td><?php if(count($Like2) == '0'){}else{echo count($Like2);}?></td>
         <td><?php if(count($Like3) == '0'){}else{echo count($Like3);}?></td>
         <td><?php if(count($Like4) == '0'){}else{echo count($Like4);}?></td>
         <td><?php if(count($Like5) == '0'){}else{echo count($Like5);}?></td>
         </tfoot>

     </table>
</div>
<div class="col-md-6">
    <h1 class="Header">Veranstaltunschat</h1>
    <form action={{action('CommentController@store')}}>
        {{csrf_field()}}
        <div><textarea size="5" rows="5" name="comment" id="comment" class="form-control" placeholder="Kommentar eingeben"></textarea></div>
        <input type="hidden" name="VerID" value="<?php echo $id?>">
        <div><input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit"></div>
    </form>

    @foreach($Comment as $comment)
        <a href="{{route('UserProfil',$comment->Username)}}"><h2 id="CommentHead">{{$comment->Username}} am {{$comment->created_at}}</h2></a>
        <p id="Comment">{{$comment->Comment}}</p>
    @endforeach
</div>
</div>
    @endforeach
@endsection