

<?php 

print_r($_POST);

$mail = $_POST['mail'];
$password = $_POST['password'];


include 'makeCommand.php';


$work = makeCommand("select * from _User where mail='{$mail}' and password='{$password}';", 'root', 'root');


print_r($work);

$userName = $work[0][2];


session_start();



$_SESSION['mail'] = $mail;
$_SESSION['userName'] = $userName;

header('Location: index.php')

?>
