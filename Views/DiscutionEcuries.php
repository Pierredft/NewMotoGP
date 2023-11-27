<?php if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../includes/head.php";
require_once "../includes/header.php";
require_once "../controllers/addSujetEcuries.php";
require_once "../controllers/sujetEcuriesController.php";
?>
<link rel="stylesheet" href="../CSS/DiscutionPilotes.css">
<title>Discution Ecuries</title>
</head>

<body>
    <!-- tableau ajout de sujet -->
    <table class="table1" align="center">
        <thead class="thead1">
            <tr class="tr1">
                <th class="motoGP th1">#</th>
                <th class="motoGP th1">Sujet</th>
                <!-- <th class="motoGP th1">Dernier sujet</th>
                <th class="motoGP th1">Auteur</th> -->
            </tr>
        </thead>
        <?php
        //boucle foreach pour afficher chaque ligne de la requête
        foreach ($lignes as $ligne) {
            echo '<tr>
      <td>' . $ligne['Id_Sujet'] . '</td>
      <td>' . $ligne['Nom_Sujet'] . '</td>
    </tr>';
        }
        ?>
        <tbody id="table-body">
        </tbody>
    </table>
    <!-- tableau ajout de sujet -->

    <!-- ajout du sujet -->
    <form action="../controllers/addSujetEcuries.php" method="POST" class="">

    <div class="flex">
        <div class="flex2 zoneAjouter" id="zoneAjouter">
            <input class="zoneText" type="text" id="topic-input" placeholder="Entrer votre nouveau sujet">
            <button class="btnAjouter" id="add-button">Ajouter</button>
        </div>
    </div>
    </form>
    <!-- ajout du sujet -->

    <!-- tableau des classement pilotes -->
    <div align="center" class="cacheMediaQuery">
        <div class="buttonClassement">
            <button type="button" id="btnCircuits" class="fa-solid fa-chevron-down btnClassement"></button>
            <p class="motoGP">Voir le classement des écuries</p>
        </div>
        <div class="cacheTableau" id="tableauClassement">
            <table class="table2">
                <thead class="thead2">
                    <tr class="tr2">
                        <th class="th2">Pos</th>
                        <th class="th2">Ecuries</th>
                        <th class="th2">Points</th>
                    </tr>
                </thead>
                <tbody class="tbody2">
                    <tr class="tr2">
                        <td class="td2">1</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/PRAMAC_logo.png" class="logoEcuries" alt="logo">Prima Pramac Racing</td>
                        <td class="td2">526</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">2</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/MoonieVR46.png" class="logoEcuries" alt="logo">Mooney VR46 Racing Team</td>
                        <td class="td2">441</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">3</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/Ducati.png" class="logoEcuries" alt="logo">Ducati Lenovo Team</td>
                        <td class="td2">418</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">4</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/KTM.png" class="logoEcuries" alt="logo">Red Bull KTM Factory Racing</td>
                        <td class="td2">368</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">5</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/Aprilia.png" class="logoEcuries" alt="logo">Aprilia Racing</td>
                        <td class="td2">355</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">6</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/yamaha.webp" class="logoEcuries" alt="logo">Monster Energy Yamaha MotoGP</td>
                        <td class="td2">213</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">7</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/gresini.png" class="logoEcuries" alt="logo">Gresini Racing</td>
                        <td class="td2">201</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">8</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/RNF.png" class="logoEcuries" alt="logo">RNF Racing</td>
                        <td class="td2">119</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">9</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/honda-lcr.png" class="logoEcuries" alt="logo">Honda LCR</td>
                        <td class="td2">110</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">10</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/gasgas.png" class="logoEcuries" alt="logo">GasGas Tech3</td>
                        <td class="td2">88</td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">11</td>
                        <td class="td2 flexEcuries"><img src="../DiscutionEcuries/LogoEcuries/repsol.png" class="logoEcuries" alt="logo">Repsol Honda Team</td>
                        <td class="td2">85</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../DiscutionEcuries/DiscutionEcuries.js"></script>
    <script src="../JS/cacheClassement.js"></script>
    <?php
    //  require_once "../includes/footer.php"; ?>
</body>

</html>