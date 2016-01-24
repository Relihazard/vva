<form method="post" action='validerReservation.php'>
    Dates disponibles :<br>
    <select name="dateSemaineHebergement">
        <?php
        if ($sqlSemaine == true) {
            for ($i = 0; $i < $sqlSemaine->rowCount(); $i++) { //pdo->rowCount() retourne le nombre de lignes de la requête
                echo '<option value=\'' . $dataSemaine['DATEDEBSEM'] . '\'>' . $dataSemaine['DATEDEBSEM'] . ' au ' . $dataSemaine['DATEFINSEM'] . '</option>';
                $dataSemaine = $sqlSemaine->fetch();
            }
        }
        ?>
    </select><br>
    <input type='submit' value='Reserver'>
</form>