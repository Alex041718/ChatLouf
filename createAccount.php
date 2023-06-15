

<?php 

//print_r($_POST);

$userNameForm = $_POST['userName'];
$mailForm = $_POST['mail'];
$passwordForm = $_POST['password'];


include 'makeCommand.php';

// verrifier l'unicité du mail et du nom d'utilisateur


$error = array();

$request = makeCommand("select * from _User where userName='{$userNameForm}' mail='{$mail}' and password='{$password}';", 'root', 'root');

// verrifier que le nom d'utilisateur n'est pas déjà utilisé
$request = makeCommand("select * from _User where userName='{$userNameForm}';", 'root', 'root');

if (count($request) != 0) {
    $error[] = "nameAlreadyUsed";
}

// verrifier que le mail n'est pas déjà utilisé
$request = makeCommand("select * from _User where mail='{$mailForm}';", 'root', 'root');
if (count($request) != 0) {
    $error[] = "mailAlreadyUsed";
}

if (count($erreur) != 0) {
    
    
    session_start();
    // on met les erreurs dans la session
    $_SESSION['error'] = $error;

    header('Location: signInPage.php');
    exit();
} else {

    // créer le compte
    $request = makeCommand("insert into _User (mail, userName, password) values ('{$mailForm}', '{$userNameForm}', '{$passwordForm}');", 'root', 'root');

    session_start();

    // récupérer les données du compte pour la redirection vers index.php
    $request = makeCommand("select * from _User where mail='{$mailForm}' and password='{$passwordForm}';", 'root', 'root');

    // on met les données dans la session
    $_SESSION['mail'] = $mailForm;
    $_SESSION['userName'] = $userNameForm;

    header('Location: index.php');
    exit();
}


if (count($request) != 0) {
    $userNameRequest = $request[0][2];
    $mailRequest = $request[0][1];

    session_start();



    $_SESSION['mail'] = $mail;
    $_SESSION['userName'] = $userNameRequest;

    header('Location: index.php');
    exit();
} else {
    
    header('Location: connectionPage.php?error=1');
    exit();
}





?>
