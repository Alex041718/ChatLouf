<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <title>Création du compte</title>
        <link rel="stylesheet" href="style/index.css">
        <link rel="stylesheet" href="style/requestPage.css">
    </head>
    <body>

   

    <header>

    

    <img src="media/chatLouf.png">


    </header>

    <div id="requestBox"> 
        <p id="requestTitle">Inscris toi</p>
        <div id="container">
            <form action="authentication.php" method="post">
                <div id="inputContainer">
                    
                    
                    <div class="inputBox">
                        <img src="media/form/mail.svg" id="mailImg">
                        <input type="email" name="mail" id="mail" required placeholder="Email"/>
                    </div>
                    <div class="inputBox">

                        <img src="media/form/password.svg" id="passwordImg">
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                </div>
                
                <input type="submit" value="Se connecter"/>
                
            </form>
            <img src="media/form/connection.svg" id="formImg">
        </div>
    </div>
    <?php
    
    session_start();
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    }

    
    ?>

    </body>
</html>