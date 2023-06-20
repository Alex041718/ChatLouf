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

    

    <img src="media/ChatTrotro.png">


    </header>

    <div id="requestBox"> 
        <p id="requestTitle">Inscris toi</p>
        <div id="container">
            <form action="createAccount.php" method="post">
                <div id="inputContainer">
                    
                    <div class="inputBox">
                        <img src="media/form/userName.svg" id="userNameImg">
                        <input type="text" name="userName" id="userName" placeholder="Username" required/>
                    </div>
                    <div class="inputBox">
                        <img src="media/form/mail.svg" id="mailImg">
                        <input type="email" name="mail" id="mail" required placeholder="Email"/>
                    </div>
                    <div class="inputBox">

                        <img src="media/form/password.svg" id="passwordImg">
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                </div>

                <?php
                session_start();
                if (isset($_SESSION['error'])) {

                    echo "<p id='error'>Nom d'utilisateur ou Email déjà utilisé<p/>";
                    unset($_SESSION['error']);
                }
                ?>
                
                <input type="submit" value="S'inscrire"/>
                <p id="changeRequest" > Déjà inscrit ? <a href="connectionPage.php">Connecte toi</a></p>
                
                
            </form>
            <img src="media/form/signIn.svg" id="formImg">
        </div>
    </div>
    

    </body>
</html>
