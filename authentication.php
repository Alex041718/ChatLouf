/*le script reçoit les données du formulaire de connexion et vérifie si l'utilisateur et le mot de passe sont corrects dans la table _User la base de données, une fois authentifié l'utilisateur est redirigé vers index.php avec des paramètre authentifiant .
*/

<?php 


// crée une fonction qui réalise des command sur la base de données
function makeCommandWithResult($command) {
    


    $link = mysqli_connect('localhost', 'root', 'root', 'WebSite') or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

    if (!($result=mysqli_query($link,$command))) {
        printf("Error: %s\n", mysqli_error($link));

    }

    $row = mysqli_fetch_row($result);
    print_r($row);

    /*
    while( $row = mysqli_fetch_row( $result ) ){
        if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
            echo $row[0]."<br/>\r\n";
        }
    }
    
    */
}

makeCommandWithResult("select mail,userName from _User;");

?>
