
<?php

if (!isset($_SESSION['login'])) {
    echo '<li class="lienNavBar"><a href="inscription.php">Inscription</a></li>';
}
if (isset($_SESSION['login'])) {
    echo '<li class="lienNavBar"><a href="perso.php">Page perso</a></li>';
}
if (isset($_SESSION['login']) && ($_SESSION['droits'] == 'air' || $_SESSION['droits'] == 'adm')) {
    echo '<li class="lienNavBar"><a href="listeReservations.php">Liste des réservations</a></li>';
}
if (isset($_SESSION['login']) && $_SESSION['droits'] == 'adm') {
    echo '<li class="lienNavBar"><a href="admin.php">Administration</a></li>';
}
?>