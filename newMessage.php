<?php
    include 'makeCommand.php'

    session_start();

    $mail = $_SESSION['mail'];
    $userName = $_SESSION['userName'];
    $userID = $_SESSION['userID'];

    $content = $_POST['content'];

    $nvMessage = makeCommand("insert into _Message (userID, time, content) values ('{$userID}', NOW(), '{$content}');", 'root', '');

    header('Location : index.php');
    exit();

?>