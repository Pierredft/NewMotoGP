<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../includes/head.php";
require_once "../includes/header.php";
require_once "../controllers/utilisateurController.php";
?>
<link rel="stylesheet" href="../CSS/Accueil.css">
<title>Accueil</title>
</head>

<body>
    <div class="bandeau">
        <div class="bienvenue">
            <h1 class="motoGP">Bienvenue :</h1>
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] == 1) {
                echo '<p class="texteMotoGP NomPrenom">' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . '</p>';
            } ?>
        </div>
        <div class="date">
            <h1 class="motoGP">Nous somme le :</h1>
            <?php $date = date("j/n/Y");
            echo '<p class="texteMotoGP dateJ"">' . $date . '</p>' ?>
        </div>
        <div class="heure">
            <h1 class="motoGP">Vous vous êtes connecté à :</h1>
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] == 1) {
                echo '<div class="texteMotoGP heureCo">' . $_SESSION['date']->format('H:i:s') . '</div>';
            } ?>
        </div>
    </div>
    <div class="categories">
        <div class="pilotes">
            <h2 class="motoGP size4vh">Pilotes</h2>
            <p class="texteMotoGP size3vh">Venez discuter des pilotes ainsi que de vos espérance pour
                vos pilotes
                préféré
            </p>
            <p class="mb-4 colorBlack size3vh">(Classement, transfert, chute, blessure...)</p>
            <a class="motoGP cssBtn" href="../views/DiscutionPilotes.php" role="button">J'y vais</a>
        </div>

        <div class="ecuries">
            <h2 class="motoGP size4vh">Ecuries</h2>
            <p class="texteMotoGP size3vh">Venez discuter des écuries de motoGP ainsi que de vos
                espérance pour
                votre
                team préférer</p>
            <p class="mb-4 colorwhite size3vh">(Classement, performance des machines, amélioration, attente
                pour la
                prochaine
                saison...)</p>
            <a class="motoGP cssBtn" href="../views/DiscutionEcuries.php" role="button">J'y vais</a>
        </div>
        <div class="circuits">
            <h2 class="motoGP size4vh h2Resp">Circuits</h2>
            <p class="texteMotoGP size3vh">Venez discuter des circuits de motoGP du monde entier</p>
            <p class="mb-4 colorBlack size3vh">(Pays, difficultés, record de vitesse, grand moment...)</p>
            <a class="motoGP cssBtn" href="../views/DiscuitionCircuits.php" role="button">J'y vais</a>
        </div>
    </div>
    <?php
    require_once "../includes/footer.php" ?>
    <script src="../Accueil/Accueil.js"></script>
</body>

</html>