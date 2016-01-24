Nom de l'hébergement : <?php echo $data ['NOMHEB'] ?><br>
Nombre de places : <?php echo $data ['NBPLACEHEB'] ?><br>
Surface : <?php echo$data ['SURFACEHEB'] ?>m²<br>
<?php
if ($data ['INTERNET'] == "1") {
    echo 'Internet : Oui<br>';
} else {
    echo 'Internet : Non<br>';
}
?>
Année de la dernière remise en état : <?php echo $data ['ANNEEHEB'] ?><br>
Secteur de l'hébergement : <?php echo $data ['SECTEURHEB'] ?><br>
Orientation de votre hébergement : <?php echo $data ['ORIENTATIONHEB'] ?><br>
Etat de l'hébergement : <?php echo$data ['ETATHEB'] ?><br>
Description de l'hébergement :<?php echo $data ['DESCRIHEB'] ?><br><br>
Photos : <br><img alt="imageOffre" class="imageOffre" src='<?php echo $data ['PHOTOHEB'] ?>'><br>
Tarif haute saison: <?php echo $data['PRIXHEB']; ?>€<br>
Tarif basse saison: <?php $data = $sql->fetch();
echo $data['PRIXHEB']; ?>€<br>
<form method="post" action="reserverOffre.php">
    <input type="submit" value="Réserver l'offre">
</form>
<?php
if (isset($_SESSION ['login'], $_SESSION ['droits']) && $_SESSION ['droits'] == 'air') {
    ?>
    <a href='modifierOffre.php'>Modifier l'offre</a>
    <?php
}
?>