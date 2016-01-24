
<?php

if (!isset($_SESSION['login'])) {
    echo '<li class="lienNavBar"><a href="inscription.php">Inscription</a></li>';
}
if (isset($_SESSION['login'])) {
    echo '<li class="lienNavBar"><a href="perso.php">Page perso</a></li>';
}
if (isset($_SESSION['login']) && $_SESSION['droits'] == 'air') {
    echo '<li class="lienNavBar"><a href="listeReservations.php">Liste des réservations</a></li>';
}
?>