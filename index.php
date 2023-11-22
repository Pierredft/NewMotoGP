<?php require_once "./includes/head.php";
    // require_once "./controllers/utilisateurController.php";
 ?>
 <!-- CSS de la page -->
<link rel="stylesheet" href="./CSS/index.css">

    <title>Opening</title>
</head>

<body>
    <?php echo "SELECT * FROM UTILISATEUR"; 
    echo "test"?>
    <div class="container">
        <div class="flexVideo"> <!-- video d'ouverture moto gp -->
            <video controls src="./Video/OpeningMotoGp.mp4" alt="OpeningMotoGpVideo" autoplay></video>
        </div>

        <h1 class="color motoGP">Bienvenue sur le forum des fans de motoGP en FRANCE</h1>
        <p class="color texteMotoGP">Afin d'accéder au forum, merci de bien vouloir choisir l'une des options suivante :</p>
        <div class="flexBtn">
            
            <a class="color deco motoGP" href="./Views/register.php" role="button">S'inscrire</a>
            <a class="color deco motoGP" href="./Views/connexion.php" role="button">Connexion</a>
        </div>
    </div>
    <?php
    //boucle foreach pour afficher chaque ligne de la requête
    foreach($lignes as $ligne){
        echo '<tr>
      <td>'.$ligne['ID_User'].'</td>
      <td>'.$ligne['Mail_User'].'</td>
      <td>'.$ligne['MDP_User'].'</td>
      <td>'.$ligne['Nom_User'].'</td>
      <td>'.$ligne['Prenom_User'].'</td>
    </tr>';
    }
    ?>
</body>

</html>