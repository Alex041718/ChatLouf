

<?php 

print_r($_POST);

$mail = $_POST['mail'];
$password = $_POST['password'];


include 'makeCommand.php';


$request = makeCommand("select * from _User where mail='{$mail}' and password='{$password}';", 'root', 'root');

if (count($request) != 0) {
    $userNameRequest = $request[0][2];
    $mailRequest = $request[0][1];

    session_start();



    $_SESSION['mail'] = $mail;
    $_SESSION['userName'] = $userName;

    header('Location: index.php');
    exit();
} else {
    
    header('Location: connectionPage.php?error=1');
    exit();
}





?>
