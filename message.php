<?php


include 'makeCommand.php';
$resMycommand = makeCommand('SELECT * FROM _Message;', 'root', 'root');
print_r($resMycommand);
?>