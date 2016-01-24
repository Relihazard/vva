<?php
include 'modele/connexionSQL.php';
include 'modele/session.php';

//récupération des critères de recherches spécifiés par l'utilisateur
$nbPlaces = filter_input(INPUT_GET, 'nbPlaces');
if (isset($nbPlaces)) {
    $critere1 = 'AND NBPLACEHEB=' . $nbPlaces . '';
} else {
    $critere1 = ' ';
}

$orientation = filter_input(INPUT_GET, 'orientation');
if (isset($orientation)) {
    $critere2 = 'AND ORIENTATIONHEB=\'' . $orientation . '\'';
} else {
    $critere2 = ' ';
}

$internet = filter_input(INPUT_GET, 'internet');
if ($internet == "Oui") {
    $critere3 = 'AND INTERNET=1';
} else if ($internet == "Non") {
    $critere3 = 'AND INTERNET=0';
} else {
    $critere3 = ' ';
}

//construction de la requête SQL suivant les critères
$requete = 'SELECT * FROM HEBERGEMENT WHERE NOHEB!=0 ' . $critere1 . ' ' . $critere2 . ' ' . $critere3 . ';';
$sql = $link->query($requete);
$data = $sql->fetch();

include '/vue/partage/header.php';
?>
        Résultat de votre recherche :<br><br>
        <?php
        if ($sql == true) {
            if (count($data['NOHEB']) != 0) {
                for ($i = 0; $i < count($data['NOHEB']); $i++) {
                    echo '<form method=\'get\' action=\' affichageOffre.php\'>';
                    echo '<input type=\'hidden\' name=\'nomHebergement\' value=\'' . $data['NOMHEB'] . '\'>', $data['NOMHEB'], ' ';
                    echo '<input type=\'submit\' value=\'Aficher les détails\'>';
                    echo '</form><br><br>';
                }
            } else {
                echo 'Désolé, aucune offre ne correspond à vos critères.';
            }
        } else {
            echo 'Erreur SQL, veuillez réessayer.';
        }
        ?>
    </body>
</html>
