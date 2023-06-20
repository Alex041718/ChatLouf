


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <title>Informattion du compte</title>
        <link rel="stylesheet" href="style/index.css">
        <link rel="stylesheet" href="style/infoUserPage.css">
    </head>
    <body>

    <?php
    include 'config.php';
    
        include 'makeCommand.php';
        session_start();

        if (!isset($_SESSION['mail'])) {
            header('Location: connectionPage.php');
        }
        
        $mail = $_SESSION['mail'];
        $userName = $_SESSION['userName'];
        $userID = makeCommand("SELECT userID FROM _User WHERE mail = '{$mail}';", $userDB, $passwordDB)[0][0];


        ?>

   

    <header>

    <a href="infoUserPage.php"><div id="idBox">
                <img src="media/idCircle.svg">
                <p id="idBoxText"><?php echo $userName; ?></p>
    </div></a>

    <a href="index.php"><img src="media/ChatTrotro.png"></a>


    </header>


    <div id="requestBox"> 
        <p id="requestTitle">Information du compte</p>



        <div id="container">
            <div class="inputBox">

                <img src="media/form/userName.svg" id="userNameImg">
                <span><?php echo $_SESSION['userName']; ?></span>
            </div>
            <div class="inputBox">

                <img src="media/form/mail.svg" id="mailImg">
                <span><?php echo $_SESSION['mail']; ?></span>
            </div>
            
            
        </div>

        
    </div>

    <div id="requestBox"> 
        <p id="requestTitle">Information de la session</p>



        <div id="container">
            <div class="inputBox">

                <img src="media/form/info.svg" id="infoImg">
                <span><?php echo date('d/m/y H:i:s'); ?></span>
            </div>

            <?php
                $ip = $_SERVER['REMOTE_ADDR'];
                $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
                
                //echo $details->city; // City
                //echo $details->region; // Region
                //echo $details->country; // Country
                if ($ip == "::1"):
                    $ip = "localhost";
            ?>  

            <div class="inputBox">
                            

                <img src="media/form/info.svg" id="infoImg">
                <span><?php echo $ip; ?></span>

            </div>

            <?php else: ?>
                <div class="inputBox">
                            

                <img src="media/form/info.svg" id="info.svg>
                <span><?php echo $ip; ?></span>

                </div>
                <div class="inputBox">
                            

                <img src="media/form/info.svg" id="infoImg">
                <span><?php echo $details->city . ", " . $details->region . ", " . $details->country; ?></span>


                </div>

                
            <?php endif; ?>
            
            <div class="inputBox">
                            

                <img src="media/form/info.svg" id="infoImg">
                <span><?php echo "Le user-agent de votre session : </br></br>" . 
                $_SERVER['HTTP_USER_AGENT']; ?></span>


            </div>
            
        </div>

        
    </div>
    

    </body>
</html>