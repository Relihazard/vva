<?php

include '../connexionSQL.php';
include '../session.php';

header("Content-Type: text/html; charset=utf-8");

$nomOffre = filter_input(INPUT_POST, 'nomOffre');
$typeOffre = filter_input(INPUT_POST, 'typeOffre');
$nbPlacesOffre = filter_input(INPUT_POST, 'nbPlacesOffre');
$surfaceOffre = filter_input(INPUT_POST, 'surfaceOffre');
$internetOffre = filter_input(INPUT_POST, 'internetOffre');
if ($internetOffre == 'oui') {
    $internetOffre = '1';
} else {
    $internetOffre = '0';
}
$anneeRemiseOffre = filter_input(INPUT_POST, 'anneeRemiseOffre');
$secteurOffre = filter_input(INPUT_POST, 'secteurOffre');
$orientationOffre = filter_input(INPUT_POST, 'orientationOffre');
$etatOffre = filter_input(INPUT_POST, 'etatOffre');
$descriOffre = filter_input(INPUT_POST, 'descriOffre');

//upload
$dossier = '../../contenu/images/hebergement/';
$imageUpload = basename($_FILES['imageUpload']['name']);
$fichierUpload = $dossier . $imageUpload;
move_uploaded_file($_FILES['imageUpload']['tmp_name'], $fichierUpload); //move_uploaded_file($fichier_tmp, $dossierFichier)


$tarifHS = filter_input(INPUT_POST, "tarifHS");
$tarifBS = filter_input(INPUT_POST, "tarifBS");

$requeteNoOffre = 'SELECT MAX(NOHEB) FROM hebergement';

$requete = 'INSERT INTO hebergement VALUES(\'\','
        . '' . $typeOffre . ','
        . '\'' . $nomOffre . '\', '
        . '' . $nbPlacesOffre . ', '
        . '' . $surfaceOffre . ', '
        . '' . $internetOffre . ', '
        . '' . $anneeRemiseOffre . ', '
        . '\'' . $secteurOffre . '\', '
        . '\'' . $orientationOffre . '\', '
        . '\'' . $etatOffre . '\', '
        . '\'' . $descriOffre . '\', '
        . '\'' . $fichierUpload . '\');';
$sql = $link->prepare($requete);

if ($sql->execute() == true) {
    $sqlNoOffre = $link->query($requeteNoOffre);
    $dataNoOffre = $sqlNoOffre->fetch();
    $noOffre = $dataNoOffre['MAX(NOHEB)'] + 1;
    $requeteHS = 'INSERT INTO tarif VALUES(' . $noOffre . ', 1,' . $tarifHS . ');';
    $sqlHS = $link->prepare($requeteHS);
    $requeteBS = 'INSERT INTO tarif VALUES(' . $noOffre . ', 2,' . $tarifBS . ');';
    $sqlBS = $link->prepare($requeteBS);
    if ($sqlHS->execute() == true && $sqlBS->execute() == true) {
        $_SESSION['ajoutReussi'] = true;
        $_SESSION['noOffre'] = $noOffre;
        header('location: ../../ajouterOffre.php');
    } else {
        $_SESSION['ajoutReussi'] = false;
        header('location: ../../ajouterOffre.php');
    }
} else {
    echo $noOffre;
    $_SESSION['ajoutReussi'] = false;
    header('location: ../../ajouterOffre.php');
}
