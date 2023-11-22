<?php require_once "../includes/head.php";
//appel de mon fichier de connexion
require_once "../includes/connexiondb.php";
// require_once "../controllers/utilisateurController.php";
?>

<!-- utilisateurController -->
<?php
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


//  ajout des entrée à la base de données
//on vérifie si les champs sont remplis
if (isset($_POST['Nom_User']) && isset($_POST['Prenom_User']) && isset($_POST['Mail_User']) && isset($_POST['MDP_User']) && isset($_POST['Img_Profile'])) {

    //création des variables pour stocker les données des champs
    $nom        =   $_POST['Nom_User'];
    $prenom     =   $_POST['Prenom_User'];
    $mail       =   $_POST['Mail_User'];
    $pass       =   $_POST['MDP_User'];
    // $imgProfile =   $_FILES['Img_Profile'];

    //on fait notre requête sql avec le prépare
    $req = $con->prepare('INSERT INTO UTILISATEUR (Non_User, Prenom_User, Mail_User, MDP_User, Img_Profile) VALUES (?,?,?,?,?)');
    //puis on exécute notre requête
    $req->execute(array($nom, $prenom, $mail, $pass, $imgProfile));
    // retour sur le tableau des auteurs
    header('location: ./connexion.php');
    exit;
}
?>

<link rel="stylesheet" href="../CSS/register.css">
<title>Register</title>
</head>


<body>
    <h1 class="motoGP">INSCRIPTION</h1>
    <main>
        <div class="container">
            <form id="signup" class="form" action="register.php" method="POST">
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

    <!-- <script src="../JS/register.js"></script> -->
</body>

</html>