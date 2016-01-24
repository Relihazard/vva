<?php
if (!isset($_SESSION['inscriptionValide'])) {
    include 'vue/inscription/formulaireInscription.php';
    session_destroy();
} else if($_SESSION['inscriptionValide'] == false) {
    echo 'Erreur lors de votre inscription, veuillez réessayer.';
    unset($_SESSION['inscriptionValide']);
    include 'vue/inscription/formulaireInscription.php';
} else {
    include 'vue/inscription/inscriptionReussie.php';
    session_destroy();
}
?>