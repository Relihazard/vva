<?php

include '../connexionSQL.php';
include '../session.php';

$dateAccuse = filter_input(INPUT_POST, "accuse");
$dateArrhes = filter_input(INPUT_POST, "arrhes");
$noHeb = $_SESSION['tabReservation'][0];
$dateDebSem = $_SESSION['tabReservation'][1];

if (empty ($dateAccuse) == false ) {
    $requete = 'UPDATE resa SET DATEACCUSERECEPTION=\''.$dateAccuse.'\' WHERE NOHEB=\''.$noHeb.'\' AND DATEDEBSEM=\''.$dateDebSem.'\';';
} else if (empty ($dateArrhes) == false ) {
    $requete = 'UPDATE resa SET DATEARRHES=\''.$dateArrhes.'\' WHERE NOHEB=\''.$noHeb.'\' AND DATEDEBSEM=\''.$dateDebSem.'\';';
}

$sql = $link->query($requete);

if ($sql==true) {
    $_SESSION['modifReservationReussie'] = true;
    header('location: ../../modifierReservation.php');
} else {
    $_SESSION['modifReservationReussie'] = false;
    header('location: ../../modifierReservation.php');
}