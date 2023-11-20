<?php

require_once "../Includes/connexiondb.php";
 $con = connectdb();
 
 //on vérifie si les champs sont remplis
if(isset($_POST['Nom_User, Prenom_User, Mail_User, MDP_User, Img_Profile'])){

    //création des variables pour stocker les données des champs
    $nom= $_POST['Nom_User'];
    $prenom = $_POST['Prenom_User'];
    $mail = $_POST['Mail_User'];
    $pass = $_POST['MDP_User'];
    $imgProfile = $_POST['Img_Profile'];

    //on fait notre requête sql avec le prépare
    $req= $con->prepare('INSERT INTO UTILISATEUR (Non_User, Prenom_User, Mail_User, MDP_User, Img_Profile) VALUES (?, ?, ?, ?, ?)');
    //puis on exécute notre requête
    $req->execute(array($nom,$prenom,$mail,$pass,$imgProfile));
    // retour sur le tableau des auteurs
    // header('location: ../views/addauteurs.php');
    exit;
}

?>