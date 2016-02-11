<?php

$requete = 'SELECT * FROM resa R, semaine S WHERE R.DATEDEBSEM=S.DATEDEBSEM AND DATEFINSEM>CURDATE();';
$sqlListeResa = $link->query($requete);
$listeResa = $sqlListeResa->fetch();
?>

