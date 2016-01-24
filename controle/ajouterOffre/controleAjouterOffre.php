<?php

if (!isset($_SESSION['ajoutReussi'])) {
    include 'modele/ajouterOffre/requeteAjouterOffre.php';
    include 'vue/ajouterOffre/vueAjouterOffre.php';
} else if ($_SESSION['ajoutReussi'] == false) {
    echo 'Erreur lors de l\'ajout de l\'offre.<br>';
    include 'modele/ajouterOffre/requeteAjouterOffre.php';
    include 'vue/ajouterOffre/vueAjouterOffre.php';
    unset($_SESSION['ajoutReussi']);
} else {
    include 'vue/ajouterOffre/vueAjouterOffreReussi.php';
    unset($_SESSION['ajoutReussi']);
}
?>