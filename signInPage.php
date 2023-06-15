<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Sign In</title>
    </head>
    <body>

    <h1>Inscription</h1>
    <form action="createAccount.php" method="post">
        <p>
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail"/>
        </p>
        <p>
            <label for="userName">Nom d'utilisateur</label>
            <input type="text" name="userName" id="userName"/>
        </p>
        <p>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password"/>
        </p>
        <p>
            <input type="submit" value="S'inscrire"/>
        </p>
    </form>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        foreach ($_SESSION['error'] as $error) {
            if ($error == "nameAlreadyUsed") {
                echo "Nom d'utilisateur déjà utilisé<br/>";
            } else if ($error == "mailAlreadyUsed") {
                echo "Email déjà utilisé<br/>";
            }
        }
    }
    ?>

    </body>
</html>