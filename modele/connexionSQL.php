<?php

define('DSN','mysql:host=localhost;dbname=resa_vva');
define('USER','root');
define('PASSWORD','');

try {
    $link = new PDO(DSN, USER, PASSWORD); //(location de la bdd+nom de la bdd', 'user', 'mdp'(vide), 'option')
} catch (Exception $ex) {
    echo 'Echec de la connexion à la base de données',$ex;
    exit();
}