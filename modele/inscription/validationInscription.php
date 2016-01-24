<?php
include '../connexionSQL.php';
include '../session.php';

$loginUtilisateur = filter_input(INPUT_POST, 'loginUtilisateur');
$nomUtilisateur = filter_input(INPUT_POST, 'nomUtilisateur');
$prenomUtilisateur = filter_input(INPUT_POST, 'prenomUTilisateur');
$mdpUtilisateur = filter_input(INPUT_POST, 'mdpUtilisateur');

$date = date("d/m/Y");

$requete = "INSERT INTO compte VALUES('$loginUtilisateur', '$mdpUtilisateur', '$nomUtilisateur', '$prenomUtilisateur', '$date', null, 'villageois');";
$sql = $link->query($requete);

if ($sql == true) {
    $_SESSION['inscriptionValide'] = True;
    header('location:../../inscription.php');
} else {
    $_SESSION['inscriptionValide'] = False;
    header('location:../../inscription.php');
}