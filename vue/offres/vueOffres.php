Consultation des offres disponibles:
<br>
<?php
if (count($data) != 1) { //aucun résultat
    ?>
    <form action="affichageOffre.php" method="get">
        <select name="noHebergement">
            <?php
            for ($i = 0; $i < count($data); $i ++) {
                echo '<option value=' . $data ['NOHEB'] . '> ' . $data ['NOMHEB'] . '</option>';
                $data = $sql->fetch(); // permet de récupérer la nouvelle ligne du tableau
            }
            ?>
        </select> 
        <input type="submit" value="Afficher">
    </form>
    <?php
} else {
    echo 'Il n\'y a aucune offre de disponible pour le moment.';
}
?>
<br>
<br> Ou recherchez les offres selon des critères :
<form action="recherche.php" method="get">
    Nombre de places : <select name="nbPlaces">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select><br> Orientation : <select name="orientation">
        <option>Nord</option>
        <option>Sud</option>
        <option>Est</option>
        <option>Ouest</option>
    </select><br> Internet : <select name="internet">
        <option>Non</option>
        <option>Oui</option>
    </select><br> <input type="submit" value="Rechercher">
</form>
<br>
<br>
