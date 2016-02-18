<?php

function TitrePage($page) {
    switch ($page) {
        case '/vva/index.php': $page = 'VVA - Index';
            break;
        case '/vva/inscription.php': $page = 'VVA - Inscription';
            break;
        case '/vva/offres.php': $page = 'VVA - Consultation des offres';
            break;
        case '/vva/recherche.php': $page = 'VVA - Résultat de votre recherche';
            break;
        case '/vva/affichageOffre.php': $page = 'VVA - Affichage de votre offre';
            break;
        case '/vva/modifierOffre.php': $page = 'VVA - Modification de l\'offre';
            break;
        case '/vva/ajouterOffre.php': $page = 'VVA - Ajouter une offre';
            break;
        case '/vva/reserverOffre.php': $page = 'VVA - Réservation de votre offre';
            break;
        case '/vva/validerReservation.php': $page = 'VVA - Validation de votre réservation';
            break;
        case '/vva/listeReservations.php': $page = 'VVA - Liste des réservations';
            break;
        case '/vva/modifierReservation.php': $page = 'VVA - Modification de la réservation';
            break;
        case '/vva/admin.php': $page = 'VVA - Administration';
            break;
    }
    echo $page;
}
