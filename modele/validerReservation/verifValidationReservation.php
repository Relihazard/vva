<?php

include '../connexionSQL.php';
include '../session.php';

$prixHebergement = filter_input(INPUT_POST, 'prixHebergement');
$montantArhes = $prixHebergement * 5 / 100;
$nbPlaces = filter_input(INPUT_POST, 'nbPlacesReservation');
$noHebergement = $_SESSION['noHebergement'];
$dateDebResa = $_SESSION['dateDebResa'];

$requeteNoVillageois = 'SELECT NOVILLAGEOIS FROM VILLAGEOIS WHERE USER=\'' . $_SESSION['login'] . '\'';
$sqlNoVillageois = $link->query($requeteNoVillageois);
$noVillageois = $sqlNoVillageois->fetch();

$requeteResa = 'INSERT INTO resa '
        . 'VALUES(' . $noHebergement . ''
        . ',\'' . $dateDebResa . '\''
        . ',\'' . $noVillageois['NOVILLAGEOIS'] . '\''
        . ',0'
        . ',' . date('y-m-d') . ''
        . ',NULL'
        . ',NULL'
        . ',' . $montantArhes . ''
        . ',' . $nbPlaces . ''
        . ',\'\');'; //date('année-mois-jour');
$sqlResa = $link->query($requeteResa);

if ($sqlResa == true) {
    $_SESSION['validationReussie'] = true;
    $_SESSION['montantArhes'] = $montantArhes;
    header('location: ../../validerReservation.php');
} else {
    $_SESSION['validationReussie'] = false;
    header('location: ../../validerReservation.php');
}
?>
