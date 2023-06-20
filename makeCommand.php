<?php 

function makeCommand($command,$user,$password) {

    // la fonction se connecte à la base de données et réalise la commande
    // Elle retourne le résultat de la commande dans un tableau de tableau, chaque ligne du tableau correspond à une ligne de la réponse de la base de données

    $link = mysqli_connect('localhost', $user, $password, 'WebSite') or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

    if (!($response=mysqli_query($link,$command))) {
        printf("Error: %s\n", mysqli_error($link));

    }

    $res = array();

    // récupère chaque ligne des résultats et les ajoute au tableau
    while ($row = mysqli_fetch_row($response)) {
        $res[] = $row;
    }

    return $res;
}

?>