<?php

$error = '';
$VerID = '';
$Username = '';
$User = '';
$comment_content = '';

if(empty($_POST["comment_content"]))
{
    $error .= '<p class="text-danger>Bitte geben Sie etwas ein</p>';
}
else
{
    $comment_content = $_POST["comment_content"];
    $VerID = $_POST["ID"];
    $User =Auth::user();
    $Username = $User->name;

}
if($error == '')
{
    $daten = array('Comment'=>$comment, 'VeranstaltungsID'=>$VerID, 'Username'=>$Username);
    DB::table('comments')->insert($daten);
    $error = '<label class ="text-success">Kommentar hinzugefügt</label>';
}

$data = array(
  'error' => $error
);

echo json_encode($data);
?>