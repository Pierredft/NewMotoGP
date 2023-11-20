<?php
    //appel de mon fichier de connexion
    require_once "../Includes/connexiondb.php";
    //creation de la variable de connexion à la bdd
    $con = connectdb();

    //création de la requête dans une variable appelé $req
    $req = 'SELECT * FROM UTILISATEUR';

    /*création d'une variable pour le résulat de la requete et on se co
    à la bdd par la même occasion et on applique la requete avec la variablé créé en amont $req
    */
    $response = $con->query($req);
    //récupération de toutes les lignes de la requête
    $lignes = $response->fetchall();

?>