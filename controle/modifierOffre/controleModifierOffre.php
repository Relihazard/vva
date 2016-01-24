<?php

if (!isset($_SESSION['modificationReussie'])) {
    include '/modele/modifierOffre/requeteModifierOffre.php';
    include '/vue/modifierOffre/vueModifierOffre.php';
} else if ($_SESSION['modificationReussie'] == true) {
    include '/vue/modifierOffre/vueModifierOffreReussie.php';
    unset($_SESSION['modificationReussie']);
} else if ($_SESSION['modificationReussie'] == false) {
    echo 'Erreur lors de la modification de l\'offre';
    include '/vue/modifierOffre/vueModifierOffre.php';
    unset($_SESSION['modificationReussie']);
}
?>
