<?php
include '/modele/affichageOffre/requeteAffichageOffre.php';
if (isset($_SESSION['login'])) {
    include '/vue/affichageOffre/vueAffichageOffreLogin.php';
} else if (!isset($_SESSION['login'])) {
    include '/vue/affichageOffre/vueAffichageOffre.php';
}
?>