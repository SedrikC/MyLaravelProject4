<?php
$connect = new PDO('mysql:host=127.0.0.1;dbname=easyplandata', 'root', '');

$error = '';
$VerID = '';
$Username = '';
$User = '';
$comment_content = '';

    $comment_content = $_POST["comment"];
    $VerID = $_POST["ID"];
    $User =Auth::user();
    $Username = $User->name;

    $query = "
    INSERT INTO comments(Comment, VeranstaltungsID, Username)
    VALUES (:Comment, :VeranstaltungsID, :Username)
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':Comment'          => $comment_content,
            ':VeranstaltungsID' => $VerID,
            ':Username'         => $Username
        )
    );
?>
