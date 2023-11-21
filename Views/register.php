<?php require_once "../includes/head.php";
require_once "../controllers/utilisateurController.php";
?>
    <link rel="stylesheet" href="../CSS/register.css">
    <title>Register</title>
</head>


<body>
    <h1 class="motoGP">INSCRIPTION</h1>
    <main>
        <div class="container">
            <form id="signup" class="form" action="../views/connexion.php">
                <div class="flex">
                <div class="form-field error success size">
                    <label for="Nom_User"><span class="color texteMotoGP">Nom:</span></label>
                    <input type="text" name="Nom_User" id="username" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field error success size">
                    <label for="Prenom_User"><span class="color texteMotoGP">Prénom:</span></label>
                    <input type="text" name="Prenom_User" id="firstname" autocomplete="off">
                    <small></small>
                </div>
            </div>


                <div class="form-field error success">
                    <label for="Mail_User"><span class="color texteMotoGP">E-mail:</span></label>
                    <input type="text" name="Mail_User" id="email" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="MDP_User"><span class="color texteMotoGP">Mot de passe:</span></label>
                    <input type="password" name="MDP_User" id="password" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="confirm-password"><span class="color texteMotoGP">Confirmation du mot de passe:</span></label>
                    <input type="password" name="confirm-password" id="confirm-password" autocomplete="off">
                    <small></small>
                </div>

                <div class="test">
                    <input type="submit" value="S'inscrire" class="btn motoGP">
                </div>
            </form>
        </div>
    </main>
    <?php

require_once "../includes/connexiondb.php";
 $con = connectdb();
 
 //on vérifie si les champs sont remplis
if(isset($_POST['Nom_User']) && isset($_POST['Prenom_User']) && isset($_POST['Mail_User']) && isset($_POST['MDP_User']) && isset ($_POST['Img_Profile'])){

    //création des variables pour stocker les données des champs
    $nom        =   $_POST['Nom_User'];
    $prenom     =   $_POST['Prenom_User'];
    $mail       =   $_POST['Mail_User'];
    $pass       =   $_POST['MDP_User'];
    $imgProfile =   $_POST['Img_Profile'];

    //on fait notre requête sql avec le prépare
    $req= $con->prepare('INSERT INTO UTILISATEUR (Non_User, Prenom_User, Mail_User, MDP_User, Img_Profile) VALUES (?,?,?,?,?)');
    //puis on exécute notre requête
    $req->execute(array($nom,$prenom,$mail,$pass,$imgProfile));
    // retour sur le tableau des auteurs
    header('location: ../views/connexion.php');
    exit;
}

?>
    <script src="../JS/register.js"></script>
</body>
</html>