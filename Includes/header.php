<?php
require_once "../includes/head.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        </div>
    </nav>
    <!-- Navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>