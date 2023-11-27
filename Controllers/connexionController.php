<?php

// début de la session pour mettre les indications en cas de réussite ou d'erreur
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récup des variables
    $mail = $_POST["Mail_User"];
    $pass = $_POST["MDP_User"];
    

        // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
        $mailOnlyOne = $con->prepare('SELECT * FROM UTILISATEUR WHERE Mail_User=?');
        $mailOnlyOne->execute([$mail]);
        $utilisateurMail = $mailOnlyOne->fetch();

        // Le mot de passe associé au mail 
        $password = 'SELECT * FROM UTILISATEUR WHERE Mail_User= "'.$_POST["Mail_User"].'"';
        $response = $con->query($password);
        $passPass = $response->fetch();

        date_default_timezone_set('Europe/Paris');

        if(!$utilisateurMail){
            $_SESSION['erreur7'] = 1;
            header("Refresh:0; url= ../views/connexion.php");
        } 

        else if(!password_verify($pass, $passPass['MDP_User'])) {
            $_SESSION['erreur8'] = 1;
            header("Refresh:0; url= ../views/connexion.php");
        } 

        else {
            $_SESSION['erreur7'] = 0;
            $_SESSION['erreur8'] = 0;
            $_SESSION['success2'] = 1;
            $_SESSION['user'] = 1;
            $_SESSION['nom'] = $passPass['Nom_User'];
            $_SESSION['prenom'] = $passPass['Prenom_User'];
            $_SESSION['date'] = new DateTime();
            $_SESSION['profile'] = $passPass['Img_Profile'];
            header('Location:../views/Accueil.php');
            exit;
        }
}
?>