<?php require_once "../Includes/head.php"
 ?>

    <link rel="stylesheet" href="../CSS/connexion.css">
    <title>Connexion</title>
</head>

<body>
    <h1 class="motoGP">CONNEXION</h1>
    <main>
        <div class="container">
            <form id="signup" class="form" action="../Accueil/Accueil.html">
                <div class="form-field error success">
                    <label for="email"><span class="color texteMotoGP">E-mail:</span></label>
                    <input type="text" name="CoEmail" id="CoEmail" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field error success">
                    <label for="Password"><span class="color texteMotoGP">Mot de passe:</span></label>
                    <input type="Password" name="CoPassword" id="CoPassword" autocomplete="off">
                    <small></small>
                </div>
                <div class="test">
                    <input type="submit" value="S'inscrire" class="btn motoGP">
                </div>
            </form>
        </div>
    </main>
    <script src="../Connexion/connexion.js"></script>
</body>

</html>