<?php

$_SESSION['noHebergement'] = filter_input(INPUT_GET, 'noHebergement');
$requete = 'SELECT * FROM HEBERGEMENT h, TARIF t WHERE h.NOHEB=t.NOHEB AND h.NOHEB=\'' . $_SESSION['noHebergement'] . '\';';
$sql = $link->query($requete);
$data = $sql->fetch();
?>