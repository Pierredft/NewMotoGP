<?php   if (session_status() !== PHP_SESSION_ACTIVE) session_start(); 
        require_once "../includes/head.php";
        require_once "../controllers/connexionController.php";
        require_once "../controllers/utilisateurController.php";
 ?>

    <link rel="stylesheet" href="../CSS//connexion.css">
    <title>Connexion</title>
</head>

<body>
    <h1 class="motoGP">CONNEXION</h1>
    <main>
        <div class="container">
            <form id="signup" class="form" action="../controllers/connexionController.php" method="post" enctype="multipart/form-data">
                <div class="form-field error success">
                    <label for="email"><span class="color texteMotoGP">E-mail:</span></label>
                    <input type="text" name="Mail_User" id="CoEmail" autocomplete="off">
                    <span id="erreur7" name="Mail_User"></span>
                        <?php 
                        if (isset ($_SESSION['erreur7']) && $_SESSION['erreur7']==1) {
                            echo'<p class="erreur">E-mail non existante) !</p>';
                        }
                        ?>
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="Password"><span class="color texteMotoGP">Mot de passe:</span></label>
                    <input type="Password" name="MDP_User" id="CoPassword" autocomplete="off">
                    <span id="erreur8" name="MDP_User"></span>
                        <?php 
                        if (isset ($_SESSION['erreur8']) && $_SESSION['erreur8']==1) {
                            echo'<p class="erreur">Le mot de passe est incorrect!</p>';
                        }
                        ?>
                    <small></small>
                </div>
                <div class="test">
                    <input type="submit" value="S'inscrire" class="btn motoGP">
                </div>
            </form>
        </div>
    </main>
    <!-- <script src="../Connexion/connexion.js"></script> -->
</body>

</html>