<?php   require_once "../includes/head.php";
        require_once "../controllers/utilisateurController.php";
        require_once "../controllers/addutilisateur.php";
?>

<link rel="stylesheet" href="../CSS/register.css">
<title>Register</title>
</head>


<body>
    <h1 class="motoGP">INSCRIPTION</h1>
    <main>
        <div class="container">
            <form id="signup" class="form" action="../controllers/addutilisateur.php" method="post" enctype="multipart/form-data">
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
                    <label for="confpass"><span class="color texteMotoGP">Confirmation du mot de passe:</span></label>
                    <input type="password" name="confpass" id="confirm-password" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="Img_Profile"><span class="color texteMotoGP">Selectionner votre photo de profile</span></label>
                    <input type="file" name="Img_Profile" id="fichier">
                    <small></small>
                </div>

                <input type="checkbox" name="rgpd" value="rgpd"><span>En cochant cette case vous accepter l'utilisation de vos donées</span>

                <div class="test">
                    <input type="submit" value="S'inscrire" class="btn motoGP">
                </div>
            </form>
        </div>
    </main>

    <!-- <script src="../JS/register.js"></script> -->
</body>

</html>