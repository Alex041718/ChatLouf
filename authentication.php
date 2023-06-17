

<?php 


//print_r($_POST);

$mailForm = $_POST['mail'];
$passwordForm = $_POST['password'];

include 'config.php';
include 'makeCommand.php';


$request = makeCommand("select * from _User where mail='{$mailForm}' and password='{$passwordForm}';", $userDB, $passwordDB);

if (count($request) != 0) {
    $userNameRequest = $request[0][2];
    $mailRequest = $request[0][1];
    $userIDRequest = $request[0][0];

    session_start();



    $_SESSION['mail'] = $mailRequest;
    $_SESSION['userName'] = $userNameRequest;
    $_SESSION['userID'] = $userIDRequest;

    header('Location: index.php');
    exit();
} else {
    
    session_start();

    $_SESSION['error'] = "Email ou mot de passe incorrect";
    
    header('Location: connectionPage.php');
    exit();
}





?>
