<?php

session_start();

$mail = $_SESSION['mail'];
$userName = $_SESSION['userName'];


echo "Bienvenue {$mail}, {$userName}";



?>
