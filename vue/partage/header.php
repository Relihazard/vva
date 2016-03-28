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
        <link rel="stylesheet" type="text/css" href="contenu/fonts.css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Varela+Round" rel="stylesheet">
        <link rel="icon" href="contenu/HTML5_Badge_512.ico">
        <script src="scripts/scripts.js"></script>
    </head>
    <body>
        <div id="wrapper">
             <header id="header-wrapper">
                 <div id="header" class="container">
                     <div id="logo">
                         <h1>
                             <a href="#">VVA</a>
                         </h1>
                     </div>
                 </div>
                <div class="container">
                    <?php
                    include ("/controle/connexion/connexion.php");
                    ?>
                </div>
                <nav id="menu">
                    <ul class="navBar">
                        <li class="lienNavBar"><a href="index.php">Acceuil</a></li>
                        <li class="lienNavBar"><a href="offres.php">Offres</a></li>
                        <?php
                        include 'controle/menu/menu.php';
                        ?>
                    </ul>
                </nav>
            </header>
            <div id="page" class="container">
