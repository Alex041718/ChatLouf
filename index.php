<?php

session_start();

$mail = $_SESSION['mail'];
$userName = $_SESSION['userName'];
$userID = $_SESSION['userID'];



echo "Bienvenue {$mail}, {$userName}";
echo $_SESSION['content'] + "riegierbgib";

include 'makeCommand.php';
$resMycommandTable = makeCommand('SELECT content FROM _Message;', 'root', 'root');
//print_r($resMycommand);
foreach($resMycommandTable as list($message)){
    echo "$message</br>";
}
?>
<form action="newMessage.php" method="post">
    <p>
        <label for="content">Votre Message :</label>
        <input type="text" name="content" id="content">
    </p>
    <p>
        <input type="submit" value="Envoyer">
    </p>
</form>




