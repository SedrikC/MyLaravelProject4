<?php


$VerID = $_POST["ID"];
$comments = comments::where('VeranstaltungsID', $VerID)->get();
$output = '';
foreach ($comments as $comment)
{
    $output .='
    <div class="panel panel-default">
        <div> Von <b>'.$comment["Username"].'
            </b> am <i>'.$comment["created_at"].'</i></div>
            <div>'.$comment["comment"].'</div>
            </div>
    ';
}

echo $output;

?>