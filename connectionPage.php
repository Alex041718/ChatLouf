<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Connection</title>
    </head>
    <body>

    <h1>Connection</h1>
    <form action="authentication.php" method="post">
        <p>
            <label for="mmail">Email</label>
            <input type="email" name="mail" id="mmail"/>
        </p>
        <p>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password"/>
        </p>
        <p>
            <input type="submit" value="Se connecter"/>
        </p>
    </form>

    <?php
    
    session_start();
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    }

    
    ?>

    </body>
</html>