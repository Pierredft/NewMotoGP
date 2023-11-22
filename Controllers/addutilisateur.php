<?php
require_once "../includes/connexiondb.php";
//  ajout des entrée à la base de données
$con = connectdb();
//on vérifie si les champs sont remplis
if (isset($_POST['Nom_User']) && isset($_POST['Prenom_User']) && isset($_POST['Mail_User']) && isset($_POST['MDP_User'])){

    //création des variables pour stocker les données des champs
    $nom        =   $_POST['Nom_User'];
    $prenom     =   $_POST['Prenom_User'];
    $mail       =   $_POST['Mail_User'];
    $pass       =   $_POST['MDP_User'];

    //on fait notre requête sql avec le prépare
    $req = $con->prepare('INSERT INTO UTILISATEUR (Nom_User, Prenom_User, Mail_User, MDP_User) VALUES (?,?,?,?)');
    //puis on exécute notre requête
    $req->execute(array($nom, $prenom, $mail, $pass));
    // retour sur le tableau des auteurs
    header('location: ../views/connexion.php');
    echo'vous etes con';
    exit;
}
?>