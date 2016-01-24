<?php

$requete = 'SELECT * FROM resa;';
$sqlListeResa = $link->query($requete);
$listeResa = $sqlListeResa->fetch();
?>

