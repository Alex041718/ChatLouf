

<?php 

//print_r($_POST);

$mailForm = $_POST['mail'];
$passwordForm = $_POST['password'];


include 'makeCommand.php';


$request = makeCommand("select * from _User where mail='{$mailForm}' and password='{$passwordForm}';", 'root', 'root');

if (count($request) != 0) {
    $userNameRequest = $request[0][2];
    $mailRequest = $request[0][1];

    session_start();



    $_SESSION['mail'] = $mailRequest;
    $_SESSION['userName'] = $userNameRequest;

    header('Location: index.php');
    exit();
} else {
    
    header('Location: connectionPage.php?error=1');
    exit();
}





?>
