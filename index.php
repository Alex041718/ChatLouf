<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>ChatLouf - Discutez avec vos amis</title>
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
        <script>

            /*
            setTimeout(
                
                function(){
                
                    //lorsque #content contient du texte on ne rafraichit pas

                    if(document.getElementById("content").value == ""){

                        window.location.reload(1);

                    }

            }, 5000);
            */

        </script>

        <?php
        include 'makeCommand.php';
        session_start();
        
        $mail = $_SESSION['mail'];
        $userName = $_SESSION['userName'];
        $userID = makeCommand("SELECT userID FROM _User WHERE mail = '{$mail}';", 'root', 'root')[0][0];


        ?>



        <header>

            <div id="idBox">
                <img src="media/idCircle.svg">
                <p id="idBoxText"><?php echo $userName; ?></p>
            </div>

            <img src="media/chatLouf.png">
            

        </header>

        <main>

        
            <div id="container" >
                <div id="messageBox">
                
                <?php


                    
                    // afficher les messages
                    $resMycommandTable = makeCommand('SELECT userID,content FROM _Message;', 'root', 'root');
                    //print_r($resMycommand);
                    echo "</br>";
                    foreach($resMycommandTable as $message){
                        $userNameTemp = makeCommand("SELECT userName FROM _User WHERE userID = '{$message[0]}';", 'root', 'root')[0][0];
                        if ($userName == $userNameTemp) {
                            echo "
                            <div class='myMessage'>
                                <div class='userNameMessage'>{$userNameTemp}</div>
                                <div class='contentMessage'>{$message[1]}</div>
                            </div>
                            ";
                        } else {
                            echo "
                            <div class='message'>
                                <div class='userNameMessage'>{$userNameTemp}</div>
                                <div class='contentMessage'>{$message[1]}</div>
                            </div>
                            ";
                        }
                        
                    }
                ?>

                </div>


                <form action="newMessage.php" method="post">
                    
                        
                        <input placeholder="Send a message..." type="text" name="content" id="content" autofocus required>
                    
                    
                        <input type="submit" value="">
                    
                </form>

            </div>

        </main>

        <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            var messageBox = document.getElementById('messageBox');
            messageBox.scrollTop = messageBox.scrollHeight;
        });
        </script>
            

    </body>
</html>


