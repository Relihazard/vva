<?php

$tabReservation = explode(":", filter_input(INPUT_GET, 'noReservation'));

$requete = 'SELECT * FROM resa WHERE NOHEB=' . $tabReservation[0] . ' AND DATEDEBSEM=\'' . $tabReservation[1] . '\';';
$sql = $link->query($requete);
$data = $sql->fetch();
?>
