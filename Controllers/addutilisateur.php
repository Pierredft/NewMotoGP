<?php if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../includes/connexiondb.php";
//  ajout des entrée à la base de données
$con = connectdb();
//on vérifie si les champs sont remplis
if (isset($_POST['Nom_User']) && isset($_POST['Prenom_User']) && isset($_POST['Mail_User']) && isset($_POST['MDP_User']) && isset($_POST['confpass']) && isset($_FILES['Img_Profile'])){

    //création des variables pour stocker les données des champs
    $nom        =   $_POST['Nom_User'];
    $nomreg     =   "/^[a-zA-Z]{3,}$/";
    $prenom     =   $_POST['Prenom_User'];
    $prenomreg  =   "/^[a-zA-Z]{3,}$/";
    $mail       =   $_POST['Mail_User'];
    $regmail    =   "/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/";
    $pass       =   $_POST['MDP_User'];
    $confpass   =   $_POST['confpass'];
    $regpass    =   "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[#\+\-\^\[\]])[A-Za-z\d#\+\-\^\[\]]{8,}$/";
    $hash       =   password_hash($pass, PASSWORD_BCRYPT);
    $vmail      =   $con ->prepare("SELECT * FROM UTILISATEUR WHERE Mail_User=?");
    $vmail      ->  execute([$mail]);
    $usermail   =   $vmail->fetch();
    

    $uploaddir = '../img/profil/';
    $uploadfile = $uploaddir . basename($_FILES['Img_Profile']['name']);
    move_uploaded_file($_FILES['Img_Profile']['tmp_name'],$uploadfile);


    if (!preg_match ($nomreg, $nom)|| $nom =="") {
        $_SESSION['erreur1']=1;
        header('Refresh:0; url=../views/register.php');
    } else if (!preg_match ($prenomreg, $prenom)|| $prenom =="") {
        $_SESSION["erreur2"]= 1;
        header("Refresh:0; url=../views/register.php");
    }else if (!preg_match ($regmail, $mail) || $mail =="") {
        $_SESSION["erreur3"]= 1;
        header("Refresh:0; url=../views/register.php");
    }else if ($usermail) {
        $_SESSION["erreur4"]= 1;
        header("Refresh:0; url=../views/register.php");
    }else if (!preg_match ($regpass , $pass) || $prenom =="") {
        $_SESSION["erreur5"]= 1;
        header("Refresh:0; url=../views/register.php");
    }else if ($pass != $confpass) {
        $_SESSION["erreur6"]= 1;
        header("Refresh:0; url=../views/register.php");
    } else
    
    
    {
    //on fait notre requête sql avec le prépare
    $req = $con->prepare('INSERT INTO UTILISATEUR (Nom_User, Prenom_User, Mail_User, MDP_User, Img_Profile) VALUES (?,?,?,?,?)');
    //puis on exécute notre requête

    $req->execute(array($nom, $prenom, $mail, $hash, $uploadfile));
    $_SESSION['erreur1'] = 0;
    $_SESSION['erreur2'] = 0;
    $_SESSION['erreur3'] = 0;
    $_SESSION['erreur4'] = 0;
    $_SESSION['erreur5'] = 0;
    $_SESSION['erreur6'] = 0;
    $_SESSION['success'] = 1;
    // retour sur le tableau des auteurs
    header('location: ../views/connexion.php');
    echo'vous etes con';
    exit;
    }
}

?>