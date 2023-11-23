<?php   if (session_status() !== PHP_SESSION_ACTIVE) session_start();
        require_once "../includes/head.php";
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
                <?php if (isset ($_SESSION['succes']) && $_SESSION['succes'] == 1) {
                    echo '<p class="sucess">Tu est déja inscrit</p>';
                }
                ?>
                <div class="flex">
                    <div class="form-field error success size">
                        <label for="Nom_User"><span class="color texteMotoGP">Nom:</span></label>
                        <input type="text" name="Nom_User" id="username" autocomplete="off">
                        <span id="erreur1" name="erreurNom"></span>
                        <?php 
                        if (isset ($_SESSION['erreur1']) && $_SESSION['erreur1']==1) {
                            echo'<p class="erreur">Nom incorrect ou trop court (3 caractères minimum et sans chiffres) !</p>';
                        }
                        ?>
                        <small></small>
                    </div>

                    <div class="form-field error success size">
                        <label for="Prenom_User"><span class="color texteMotoGP">Prénom:</span></label>
                        <input type="text" name="Prenom_User" id="firstname" autocomplete="off">
                        <span id="erreur2" name="erreurPrenom"></span>
                        <?php 
                        if (isset ($_SESSION['erreur2']) && $_SESSION['erreur2']==1) {
                            echo'<p class="erreur">Prenom incorrect ou trop court (3 caractères minimum et sans chiffres)!</p>';
                        }
                        ?>
                        <small></small>
                    </div>
                </div>


                <div class="form-field error success">
                    <label for="Mail_User"><span class="color texteMotoGP">E-mail:</span></label>
                    <input type="email" name="Mail_User" id="email" autocomplete="off">
                    <span id="erreur3" name="erreurMail"></span>
                        <?php 
                        if (isset ($_SESSION['erreur3']) && $_SESSION['erreur3']==1) {
                            echo'<p class="erreur">Format du mail incorrect!</p>';
                        } else if (isset ($_SESSION['erreur4']) && $_SESSION['erreur4']==1) {
                            echo'<p class="erreur">email existe deja!</p>';
                        }
                        ?>
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="MDP_User"><span class="color texteMotoGP">Mot de passe:</span></label>
                    <input type="password" name="MDP_User" id="password" autocomplete="off">
                    <span id="erreur5" name="erreurPassword"></span>
                        <?php 
                        if (isset ($_SESSION['erreur5']) && $_SESSION['erreur5']==1) {
                            echo'<p class="erreur">Format du mot de passe incorrect (doit contenir 8 caractère minimum, une majuscule, un chiffre et un caractère spéciale)!</p>';
                        }
                        ?>
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="confpass"><span class="color texteMotoGP">Confirmation du mot de passe:</span></label>
                    <input type="password" name="confpass" id="confirm-password" autocomplete="off">
                    <span id="erreur6" name="erreurConfPassword"></span>
                        <?php 
                        if (isset ($_SESSION['erreur6']) && $_SESSION['erreur6']==1) {
                            echo'<p class="erreur">Le mot de passe est différent de celui du dessus !</p>';
                        }
                        ?>
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="Img_Profile"><span class="color texteMotoGP">Selectionner votre photo de profile</span></label>
                    <input type="file" name="Img_Profile" id="fichier" required>
                    <small></small>
                </div>

                <input type="checkbox" name="rgpd" value="rgpd" required><span>En cochant cette case vous accepter l'utilisation de vos donées</span>

                <div class="test">
                    <input type="submit" value="S'inscrire" class="btn motoGP">
                </div>
            </form>
        </div>
    </main>

    <!-- <script src="../JS/register.js"></script> -->
</body>

</html>