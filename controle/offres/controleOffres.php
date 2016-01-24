<?php
include '/modele/offres/requeteOffres.php';
if (isset($_SESSION['droits']) && $_SESSION['droits'] == 'air') {
    include '/vue/offres/vueOffresAir.php';
} else {
    include '/vue/offres/vueOffres.php';
}
?>

