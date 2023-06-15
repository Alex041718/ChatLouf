<?php


include 'makeCommand.php';
$resMycommand = makeCommand('SELECT * FROM _Message;', 'root', '');
print_r($resMycommand);
?>