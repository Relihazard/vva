<?php
$noHebergement = $_SESSION['noHebergement'];
$requete = 'SELECT * FROM HEBERGEMENT WHERE NOHEB=\'' . $noHebergement . '\';';
$sql = $link->query($requete);
$data = $sql->fetch();
?>

