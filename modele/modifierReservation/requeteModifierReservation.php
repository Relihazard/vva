<?php

$tabReservation = explode(":", filter_input(INPUT_GET, 'noReservation'));
$_SESSION['tabReservation'] = $tabReservation;

$requete = 'SELECT * FROM resa WHERE NOHEB=' . $tabReservation[0] . ' AND DATEDEBSEM=\'' . $tabReservation[1] . '\';';
$sql = $link->query($requete);
$data = $sql->fetch();
?>
