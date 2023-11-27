<?php if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../includes/connexiondb.php";
//  ajout des entrée à la base de données
$con = connectdb();
//on vérifie si les champs sont remplis
if (isset($_POST['Nom_Sujet'])){
 
    $sujet      =   $_POST['Nom_Sujet'];

            //on fait notre requête sql avec le prépare
            $req= $con->prepare('INSERT INTO SUJET (Nom_Sujet) VALUES (?)');
            //puis on exécute notre requête
            $req->execute(array($sujet));
            //retour sur le tableau des services

            $response = $con->query($req);
            $lignes = $response->fetchAll();
            header('location: ../views/DiscutionEcuries.php');
}

?>