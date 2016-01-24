Récapitulatif de votre réservation:<br><br>
Nom de l'hébergement : <?php echo $dataHebergement['NOMHEB']; ?><br>
Nombre de places : <?php echo $dataHebergement['NBPLACEHEB']; ?><br>
Surface : <?php echo $dataHebergement['SURFACEHEB']; ?>m²<br>
<?php
if ($dataHebergement['INTERNET'] == "1") {
    echo 'Internet : Oui<br>';
} else {
    echo 'Internet : Non<br>';
}
?>
Année de la dernière remise en état : <?php echo $dataHebergement['ANNEEHEB']; ?><br>
Secteur de l'hébergement : <?php echo $dataHebergement['SECTEURHEB']; ?><br>
Orientation de votre hébergement : <?php echo $dataHebergement['ORIENTATIONHEB']; ?><br>
Etat de l'hébergement : <?php echo $dataHebergement['ETATHEB']; ?><br>
Description de l'hébergement :<br><br> <?php echo $dataHebergement['DESCRIHEB']; ?><br>
Photos : <br><img src='<?php echo $dataHebergement['PHOTOHEB']; ?>'><br>
Date de votre réservation: <?php echo $_SESSION['dateDebResa']; ?><br>
<form method="post" action="modele/validerReservation/verifValidationReservation.php">
    <?php
    if ($dataHebergement['CODESAISON'] == 1) {
        echo '<input type=\'hidden\' name=\'prixHebergement\' value=\'' . $dataHebergement['PRIXHEB'] . '\'>Tarif haute saison: ', $dataHebergement['PRIXHEB'], '€<br>';
    } else {
        $dataHebergement = $sqlHebergement->fetch();
        echo '<input type=\'hidden\' name=\'prixHebergement\' value=\'' . $dataHebergement['PRIXHEB'] . '\'>Tarif basse saison: ', $dataHebergement['PRIXHEB'], '€<br>';
    }
    ?>
    Nombre de places :
    <select name = "nbPlacesReservation">
    <?php
    for ($i = 1; $i <= $dataHebergement['NBPLACEHEB']; $i++) {
        echo '<option>' . $i . '</option>';
    }
    ?>
</select><br>
<input type="submit" value="Valider">
</form>
