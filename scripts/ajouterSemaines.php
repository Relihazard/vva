<?php

// variables à configurer
$datedebut = "2016-01-01";
$nbSemaine = 19;
$codeSaison = 2;

// script
include '../modele/connexionSQL.php';
$date = date ( $datedebut );
$temps2 = strtotime ( date ( "Y-m-d", strtotime ( $date ) ) . " +7 day" );
$date2 = date ( "Y-m-d", $temps2 );
$req = "INSERT INTO SEMAINE(DATEDEBSEM,CODESAISON,DATEFINSEM) VALUES('" . $date . "',2,'" . $date2 . "')";
$res = $link->query ( $req );

for($i = 0; $i <= $nbSemaine; $i ++) {
	$temps = strtotime ( date ( "Y-m-d", strtotime ( $date ) ) . " +7 day" );
	$date = date ( "Y-m-d", $temps );
	$temps2 = strtotime ( date ( "Y-m-d", strtotime ( $date ) ) . " +7 day" );
	$date2 = date ( "Y-m-d", $temps2 );
	$req = "INSERT INTO SEMAINE(DATEDEBSEM,CODESAISON,DATEFINSEM) VALUES('" . $date . "'," . $codeSaison . ",'" . $date2 . "')";
	$res = $link->query ( $req );
}