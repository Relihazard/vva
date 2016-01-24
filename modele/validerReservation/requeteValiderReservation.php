<?php

$noHebergement = $_SESSION['noHebergement'];
if (!isset($_SESSION['dateDebResa'])) {
    $dateDebResa = filter_input(INPUT_POST, 'dateSemaineHebergement');
    $_SESSION['dateDebResa'] = $dateDebResa;
}


$requeteHebergement = 'SELECT * FROM hebergement h, tarif t, semaine s WHERE h.NOHEB=t.NOHEB AND s.DATEDEBSEM=\'' . $_SESSION['dateDebResa'] . '\' '
        . 'AND h.NOHEB=' . $noHebergement . ';';
$sqlHebergement = $link->query($requeteHebergement);
$dataHebergement = $sqlHebergement->fetch();
?>
