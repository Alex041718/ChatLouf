<?php

session_start();

$mail = $_SESSION['mail'];
$userName = $_SESSION['userName'];
$userID = $_SESSION['userID'];

echo "Bienvenue {$mail}, {$userName}";

include 'makeCommand.php';
$resMycommandTable = makeCommand('SELECT content FROM _Message;', 'root', '');
//print_r($resMycommand);
foreach($resMycommandTable as list($message)){
    echo "$message</br>";
}
?>
<form action="newMessage.php" method="post">
    <p>
        <label for="text">Votre Message :</label>
        <input type="text">
    </p>
    <p>
        <input type="submit" value="Envoyer">
    </p>
</form>




