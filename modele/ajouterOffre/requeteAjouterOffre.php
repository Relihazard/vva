<?php

$requete = 'SELECT * from type_heb';

$sql = $link->query($requete);
$data = $sql->fetch();
?>