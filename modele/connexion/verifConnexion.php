<?php

include("../connexionSQL.php");
include '../session.php';
header("Content-Type: text/html; charset=utf-8"); //définit le charset de la page en UTF-8

$loginUtilisateur = filter_input(INPUT_POST, 'loginUtilisateur');
$mdpUtilisateur = filter_input(INPUT_POST, 'mdpUtilisateur');

$requete = "SELECT * FROM COMPTE WHERE USER='$loginUtilisateur' AND MDP='$mdpUtilisateur';";
$sql = $link->query($requete);

if ($sql == false) {
    $_SESSION['connexionFail'] = true;
    header('location: ../../index.php'); //renvoie l'utilisateur sur la page après 10 secondes (obligation de passer par URL et non location)
} else {
    $data = $sql->fetch();
    if ($data['USER'] == $loginUtilisateur && $data['MDP'] == $mdpUtilisateur && $data['DATESUPRESSION'] == NULL) {
        $_SESSION['login'] = $loginUtilisateur;
        $_SESSION['droits'] = $data['TYPECOMPTE'];
        header("location: ../../index.php");
    } else {
        $_SESSION['connexionFail'] = true;
        header('location: ../../index.php');
    }
}
    