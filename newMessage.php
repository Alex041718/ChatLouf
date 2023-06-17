<?php
    include 'sendMessage.php';
    include 'config.php';
    session_start();

    $mail = $_SESSION['mail'];
    $userName = $_SESSION['userName'];
    $userID = $_SESSION['userID'];
    

    $content = $_POST['content'];

    //$_SESSION['content'] = $content;

    //$nvMessage = makeCommand("insert into _Message (userID, time, content) values ('{$userID}', NOW(), '{$content}');", 'root', 'root');

    sendMessage($userID,$content, $userDB, $passwordDB);

    header('Location: index.php');
    exit();

?>