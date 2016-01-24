<?php

$noHebergement = $_SESSION['noHebergement'];
$requeteSemaine = 'SELECT DATEDEBSEM, DATEFINSEM FROM semaine WHERE DATEDEBSEM NOT IN '
        . '(SELECT DATEDEBSEM FROM resa WHERE NOHEB=' . $noHebergement . ');';
$sqlSemaine = $link->query($requeteSemaine);
$dataSemaine = $sqlSemaine->fetch();

?>