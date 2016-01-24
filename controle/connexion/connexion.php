
<?php

if (!isset($_SESSION['login'])) {
    include 'vue/connexion/formulaireConnexion.php';
} else {
    echo "Bienvenue ", $_SESSION['login'], " <a href='modele/connexion/deconnexion.php'>Déconnexion</a>";
}
?>