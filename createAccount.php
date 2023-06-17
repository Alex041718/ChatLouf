

<?php 

//print_r($_POST);

$userNameForm = $_POST['userName'];
$mailForm = $_POST['mail'];
$passwordForm = $_POST['password'];

include 'config.php';
include 'makeCommand.php';

// verrifier l'unicité du mail et du nom d'utilisateur


$error = array();

//$request = makeCommand("select * from _User where userName='{$userNameForm}' mail='{$mail}' and password='{$password}';", 'root', 'root');

// verrifier que le nom d'utilisateur n'est pas déjà utilisé
$request = makeCommand("select * from _User where userName='{$userNameForm}';", $userDB, $passwordDB);

if (count($request) != 0) { 
    $error[] = "nameAlreadyUsed";
}

// verrifier que le mail n'est pas déjà utilisé
$request = makeCommand("select * from _User where mail='{$mailForm}';", $userDB, $passwordDB);
if (count($request) != 0) {
    $error[] = "mailAlreadyUsed";
}

if (count($error) != 0) {
    
    
    session_start();
    // on met les erreurs dans la session
    $_SESSION['error'] = $error;

    header('Location: signInPage.php');
    exit();
} else {

    // créer le compte
    $request = makeCommand("insert into _User (mail, userName, password) values ('{$mailForm}', '{$userNameForm}', '{$passwordForm}');", $userDB, $passwordDB);

    session_start();

    // récupérer les données du compte pour la redirection vers index.php
    $request = makeCommand("select * from _User where mail='{$mailForm}' and password='{$passwordForm}';", $userDB, $passwordDB);

    // on met les données dans la session
    $_SESSION['mail'] = $request[0][1];
    $_SESSION['userName'] = $request[0][2];
    $_SESSION['userID'] = $request[0][0];

    header('Location: index.php');
    exit();
}






?>
