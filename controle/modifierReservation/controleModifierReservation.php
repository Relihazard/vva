<?php

if (!isset($_SESSION['modifReservationReussie'])) {
    include 'modele/modifierReservation/requeteModifierReservation.php';
    include 'vue/modifierReservation/vueModifierReservation.php';
} else if ($_SESSION['modifReservationReussie'] == true) {
    include 'vue/modifierReservation/vueModifierReservationReussie.php';
    unset($_SESSION['modifReservationReussie']);
} else if ($_SESSION['modifReservationReussie'] == false) {
    include 'modele/modifierReservation/requeteModifierReservation.php';
    echo 'Erreur lors de la modification de la réservation, veuillez réessayer.';
    include 'vue/modifierReservation/vueModifierReservation.php';
    unset($_SESSION['modifReservationReussie']);
}

