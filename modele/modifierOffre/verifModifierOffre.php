<?php
include '../connexionSQL.php';
include '../session.php';

$noOffre = $_SESSION['noHebergement'];
$nomOffre = filter_input(INPUT_POST, 'nomOffre');
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
$imgOffre = filter_input(INPUT_POST, 'imgOffre');

$requete = 'UPDATE HEBERGEMENT SET NOMHEB=\''.$nomOffre.'\','
        . 'NBPLACEHEB=\''.$nbPlacesOffre.'\','
        . 'SURFACEHEB=\''.$surfaceOffre.'\','
        . 'INTERNET=\''.$internetOffre.'\','
        . 'ANNEEHEB=\''.$anneeRemiseOffre.'\','
        . 'ORIENTATIONHEB=\''.$orientationOffre.'\','
        . 'SECTEURHEB=\''.$secteurOffre.'\','
        . 'ORIENTATIONHEB=\''.$orientationOffre.'\','
        . 'ETATHEB=\''.$etatOffre.'\','
        . 'DESCRIHEB=\''.$descriOffre.'\','
        . 'PHOTOHEB=\''.$imgOffre.'\''
        . 'WHERE NOHEB=\''.$noOffre.'\';';

$sql = $link->prepare($requete);

if($sql->execute() == true) {
    unset($_SESSION['noHebergement']);
    $_SESSION['modificationReussie'] = true;
    header('location: ../../modifierOffre.php');
} else {
    unset($_SESSION['noHebergement']);
    $_SESSION['modificationReussie'] = false;
    header('location: ../../modifierOffre.php');
}