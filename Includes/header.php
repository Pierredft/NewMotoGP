<?php
require_once "../includes/head.php";
?>
<link rel="stylesheet" href="../CSS/header.css">
<title>Header</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bgRed">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mr">
                        <a class="navLink texteMotoGP" href="../views/Accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item mr">
                        <a class="navLink texteMotoGP" href="../views/register.php">Inscription</a>
                    </li>
                    <li class="nav-item mr">
                        <a class="navLink texteMotoGP" href="../views/connexion.php">Connexion</a>
                    </li>
                    <li class="nav-item dropdown mr">
                        <a class="navLink dropdown-toggle texteMotoGP" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos sujet
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item texteMotoGP" href="../views/DiscutionPilotes.php">Pilotes</a></li>
                            <li><a class="dropdown-item texteMotoGP" href="../views/DiscutionEcuries.php">Écuries</a></li>
                            <li><a class="dropdown-item texteMotoGP" href="../views/DiscuitionCircuits.php">Circuits</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] == 1) {
                                echo '<a class="nav-link active text-white mx-2" id="deco" href="../controllers/deconnexion.php">Se déconnecter</a>';
                                    echo '<p class="mx-2">'. $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . '</p>';
                                    echo '<div class="picConnect"><img id="test" src='.$_SESSION['profile'].'></img></div>';
                        } else { echo '<a class="nav-link disabled text-secondary mx-2" id="deco" href="../controllers/decoconnexion.php">Se déconnecter</a>';
                        }    
                        ?>
        </div>
    </nav>
    <!-- Navbar -->
</body>

</html>