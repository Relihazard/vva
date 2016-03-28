<?php

include '../modele/connexionSQL.php';

$requete = 'SELECT * FROM hebergement;';
$sql = $link->query($requete);

$data = array();

while ($row = $sql->fetch()) {
    array_push($data, array(
        "noOffre" => $row['NOHEB'],
        "nomOffre" => $row['NOMHEB']
    ));
}

echo json_encode(array('data' => $data));