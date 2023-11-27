<?php
    //appel de mon fichier de connexion
    require_once "../includes/connexiondb.php";
    //creation de la variable de connexion à la bdd
    $con = connectdb();

    //création de la requête dans une variable appelé $req
    $req = 'SELECT * FROM SUJET WHERE Id_Categories = 3';

    /*création d'une variable pour le résulat de la requete et on se co
    à la bdd par la même occasion et on applique la requete avec la variablé créé en amont $req
    */
    $response = $con->query($req);
    //récupération de toutes les lignes de la requête
    $lignes = $response->fetchall();

    if (isset($_POST['Nom_Sujet'])){
 
        $sujet      =   $_POST['Nom_Sujet'];
    
                //on fait notre requête sql avec le prépare
                $req= $con->prepare('INSERT INTO SUJET (Nom_Sujet, Id_Categories) VALUES (?,?)');
                //puis on exécute notre requête
                $req->execute(array($sujet, 1));
                //retour sur le tableau des services    
                header('location: ../views/DiscuitionCircuits.php');
    }

?>