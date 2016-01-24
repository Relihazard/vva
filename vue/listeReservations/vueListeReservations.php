Liste des réservations:<br><br>
<form method="get" action="modifierReservation.php">
    <table class="tableListeReservations">
        <thead>
            <tr>
                <td>Numéro de l'hébergement</td>
                <td>Date de début de la semaine</td>
                <td>Modifier</td>
            </tr>
        </thead>
        <?php
        while ($listeResa) {
            echo "<tr>";
            echo "<td><a href='affichageOffre.php?noHebergement=", $listeResa['NOHEB'], "'>", $listeResa['NOHEB'], "</a></td><td>", $listeResa['DATEDEBSEM'], "</td><td>",
            "<input type='radio' name='noReservation' value='", $listeResa['NOHEB'],':', $listeResa['DATEDEBSEM'], "'></td>";
            $listeResa = $sqlListeResa->fetch();
            echo "</tr>";
        }
        ?>
    </table><br>
    <input type="submit" value="Modifier">
</form>