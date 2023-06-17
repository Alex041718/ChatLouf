<?php
    include 'config.php';
    
    function sendMessage($userID,$content,$userDB,$passwordDB){
        include 'makeCommand.php';


        $content = str_replace("'", "\\'", $content);
        $content = htmlspecialchars($content);

        makeCommand("insert into _Message (userID, time, content) values ('{$userID}', NOW(), '{$content}');", $userDB, $passwordDB);
    }
?>