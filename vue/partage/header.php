<?php
include '/modele/connexionSQL.php';
include '/modele/session.php';
include '/scripts/fonctions.php';
$page = filter_input(INPUT_SERVER, 'PHP_SELF');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php TitrePage($page) ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="contenu/css.css">
        <link rel="icon" href="contenu/HTML5_Badge_512.ico">
        <script src="scripts/scripts.js"></script>
    </head>
    <body>
        <header>
            <div class="enTete">
                <img alt="bannière" src="contenu/images/entete.png" class="banniere">
            </div>
            <div class="connexion">
                <?php
                include ("/controle/connexion/connexion.php");
                ?>
            </div>
            <nav>
                <ul class="navBar">
                    <li class="lienNavBar"><a href="index.php">Acceuil</a></li>
                    <li class="lienNavBar"><a href="offres.php">Offres</a></li>
                    <?php
                    include 'controle/menu/menu.php';
                    ?>
                </ul>
            </nav>
        </header>
        <div class="contenu">
