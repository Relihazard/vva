<?php

try {
    $link = new PDO('mysql:host=localhost;dbname=resa_vva', 'root', ''); //(location de la bdd+nom de la bdd', 'user', 'mdp'(vide), 'option')
} catch (Exception $ex) {
    echo 'Echec de la connexion à la base de données',$ex;
    exit();
}