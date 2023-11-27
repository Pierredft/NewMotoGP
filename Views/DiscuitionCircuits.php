<?php if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../includes/head.php";
require_once "../includes/header.php";
require_once "../controllers/addSujetCircuits.php";
require_once "../controllers/sujetCircuitsController.php";
?>
    <link rel="stylesheet" href="../CSS/DiscutionCircuits.css">

    <title>Discution Circuits</title>
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
    foreach($lignes as $ligne){
        echo '<tr>
      <td>'.$ligne['Id_Sujet'].'</td>
      <td>'.$ligne['Nom_Sujet'].'</td>
    </tr>';
    }
    ?>
        <tbody id="table-body">
        </tbody>
    </table>
    <!-- tableau ajout de sujet -->

    <!-- ajout du sujet -->
    <form action="../controllers/addSujetCircuits.php" method="POST" class="">
    <div class="flex">
        <div class="flex2 zoneAjouter" id="zoneAjouter">
            <input class="zoneText" type="text" id="topic-input" placeholder="Entrer votre nouveau sujet">
            <button class="btnAjouter" id="add-button">Ajouter</button>
        </div>
    </div>
    </form>
    <!-- ajout du sujet -->

    <div align="center" class="cacheMediaQuery">
        <div class="buttonClassement">
            <button type="button" id="btnCircuits" class="fa-solid fa-chevron-down btnClassement"></button>
            <p>Voir les circuits</p>
        </div>
        <div class="cacheTableau" id="tableauClassement">
            <table class="table2">
                <thead class="thead2">
                    <tr class="tr2">
                        <th class="th2">Nom et Pays</th>
                        <th class="th2">Caractéristiques</th>
                        <th class="th2">Plans</th>
                    </tr>
                </thead>
                <tbody class="tbody2">
                    <tr class="tr2">
                        <td class="td2">PORTIMAO, PORTUGAL</td>
                        <td class="td2">Longueur: 4.59 Km. <br>Largeur: 18 m. <br>Virages à gauche: 6. Virages à droite: 9.
                            <br>Plus
                            longue
                            ligne droite: 970 m.
                        </td>
                        <td class="td2"><img src="../CircuitImg/portimao.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">Termas de RIO HONDA, ARGENTINE</td>
                        <td class="td2">Longueur: 4.81 Km. <br>Largeur: 16 m. <br>Virages à gauche: 5. Virages à droite: 9.
                            <br>Plus
                            longue
                            ligne droite: 1.076 m.
                        </td>
                        <td class="td2"><img src="../CircuitImg/Argentine.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">AUSTIN, USA</td>
                        <td class="td2">Longueur: 5.51 Km. <br>Largeur: 15m. <br>Virages à gauche: 11. Virages à droite: 9.
                            <br>Ligne
                            droite
                            la plus longue: 1200 m.
                        </td>
                        <td class="td2"><img src="../CircuitImg/USA.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">JEREZ, ESPAGNE</td>
                        <td class="td2">Longueur: 4 42 Km. <br>Largeur: 11 m. Virages a gauche: 5. <br>Virages a droite: 8.
                            <br>Plus
                            longue
                            ligne droite: 607 m.
                        </td>
                        <td class="td2"><img src="../CircuitImg/Jerez.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">LE MANS, FRANCE</td>
                        <td class="td2">Longueur: 4.19 Km. <br>Largeur: 13 m. Virages à gauche: 5. <br>Virages à droite: 9.
                            <br>Ligne
                            droite
                            la plus longue: 674 m.
                        </td>
                        <td class="td2"><img src="../CircuitImg/LeMans.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">MUGELLO, ITALIE</td>
                        <td class="td2">Longueur: 5.25 Km. <br>Largeur: 14m. Virages a gauche: 6. <br>Virages a droite: 9.
                            <br>Ligne
                            droite
                            la plus longue: 1.141 m.
                        </td>
                        <td class="td2"><img src="../CircuitImg/Mugello.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">SACHSENRING, ALLEMAGNE</td>
                        <td class="td2">Longueur: 3,67 Km. <br>Largeur: 12 m. Virages à gauche: 10. <br>Virages à droite: 3.
                            <br>Plus
                            longue
                            ligne droite: 700 m.</td>
                        <td class="td2"><img src="../CircuitImg/Sachsenring.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">ASSEN, PAYS-BAS</td>
                        <td class="td2">Longueur : 4 54 Km. <br>Largeur: 14m. Virages a gauche : 6. <br>Virages a droite : 12.
                            <br>Ligne
                            droite la plus longue: 487 m.</td>
                        <td class="td2"><img src="../CircuitImg/Assen.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">SYLVERSTONE, ANGLETERRE</td>
                        <td class="td2">Longueur: 5.9 Km. <br>Largeur: 15m. Virages a gauche: 8. <br>Virages a droite: 10.
                            <br>Ligne
                            droite
                            la plus longue: 770 m.</td>
                        <td class="td2"><img src="../CircuitImg/Sylverstone.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">RED BULL SPIELBERG, AUTRICHE</td>
                        <td class="td2">Longueur: 4.32 Km. <br>Largeur: 13m. Virages à gauche: 3 <br>Virages à droite: 9.
                            <br>Ligne
                            droite
                            la plus longue: 626 m.</td>
                        <td class="td2"><img src="../CircuitImg/Autriche.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">CATALUNYA, ESPAGNE</td>
                        <td class="td2">Longueur: 4.66 Km. <br>Largeur: 12m. Virages a gauche: 6. <br>Virages a droite: 8.
                            <br>Ligne
                            droite
                            la plus longue: 1.047 m.</td>
                        <td class="td2"><img src="../CircuitImg/Barcelone.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">MISANO, RIMINI</td>
                        <td class="td2">Longueur: 4.23Km. <br>Largeur: 12m. Virages à gauche: 6. <br>Virages à droite: 10.
                            <br>Ligne
                            droite
                            la plus longue: 530 m.</td>
                        <td class="td2"><img src="../CircuitImg/Rimini.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">BUDDH, INDE</td>
                        <td class="td2">Longueur: 5,01 Km. <br>Largeur: 12 m. Virages à gauche: 5. <br>Virages à droite: 8.
                            <br>Plus
                            longue
                            ligne droite: 1.220 m.</td>
                        <td class="td2"><img src="../CircuitImg/Inde.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">MOTEGI, JAPON</td>
                        <td class="td2">Longueur: 4.8 Km. <br>Largeur: 15m. Virages à gauche: 6. <br>Virages à droite: 8.
                            <br>Ligne
                            droite
                            la plus longue: 762 m.</td>
                        <td class="td2"><img src="../CircuitImg/Japon.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">PERTIMINA MANDALIKA, INDONESIE</td>
                        <td class="td2">Longueur: 4,3 Km. <br>Largeur: 15 m. Virages à gauche: 6. <br>Virages à droite: 11.
                            <br>Plus
                            longue
                            ligne droite: 723 m.</td>
                        <td class="td2"><img src="../CircuitImg/Indonesie.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">PHILIP ISLAND, AUSTRALIE</td>
                        <td class="td2">Longueur: 4.45 Km. <br>Largeur: 13 m. Virages à gauche: 7. <br>Virages à droite: 5.
                            <br>Ligne
                            droite
                            la plus longue: 900 m.</td>
                        <td class="td2"><img src="../CircuitImg/Australie.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">CHANG, THAILAND</td>
                        <td class="td2">Longueur: 4,55 Km. <br>Largeur: 12 m. Virages à gauche: 5. <br>Virages à droite: 7.
                            <br>Plus
                            longue
                            ligne droite: 1000 m.</td>
                        <td class="td2"><img src="../CircuitImg/Thailand.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">SEPANG, MALAISIE</td>
                        <td class="td2">Longueur: 5.54 m. <br>Largeur: 16m. Virages à gauche: 5. <br>Virages à droite: 10.
                            <br>Ligne
                            droite
                            la plus longue: 920 m.</td>
                        <td class="td2"><img src="../CircuitImg/Malaisie.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">LUSAIL, QATAR</td>
                        <td class="td2">Longueur: 5.38 Km. <br>Largeur: 12 m. Virages à gauche: 6. <br>Virages à droite: 10.
                            <br>Plus
                            longue
                            ligne droite: 1.068 m.</td>
                        <td class="td2"><img src="../CircuitImg/Losail.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                    <tr class="tr2">
                        <td class="td2">RICARDO TORNO, VALENCE</td>
                        <td class="td2">Longueur: 4.01 Km. <br>Largeur: 12m. Virages à gauche: 9. <br>Virages à droite: 5.
                            <br>Ligne
                            droite
                            la plus longue: 876 m.</td>
                        <td class="td2"><img src="../CircuitImg/Valence.svg" class="imgCircuits"
                                alt="Circuits"></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <script src="../DiscutionCircuits/DiscutionCircuits.js"></script>
    <script src="../JS/cacheClassement.js"></script>
</body>

</html>