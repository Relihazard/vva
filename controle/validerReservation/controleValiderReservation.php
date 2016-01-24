<?php
include 'modele/validerReservation/requeteValiderReservation.php';
if (!isset($_SESSION['validationReussie'])) {
  include 'vue/validerReservation/vueValiderReservation.php';  
} else if ($_SESSION['validationReussie'] == false) {
    echo 'Erreur lors de la validation, attendez un peu et réessayer.<br>';
    include 'vue/validerReservation/vueValiderReservation.php';
    unset ($_SESSION['validationReussie']);
} else {
    include 'vue/validerReservation/vueValiderReservationReussie.php';
    unset ($_SESSION['validationReussie']);
}
?>

