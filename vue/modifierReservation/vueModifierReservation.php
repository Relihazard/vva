<form id="formModifReservation" method="post" action="modele/modifierReservation/verifModifierReservation.php">
    <select id="selectModifReservation" onchange="OnChangeModifReservation()">
        <option value="1">Accusé de réception reçu</option>
        <option value="2">Arhes payés</option>
    </select><br><br>
    <input type="date" name="" id="date">
    <input type="submit" value="Envoyer">
</form>