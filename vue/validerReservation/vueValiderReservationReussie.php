Votre réservation a bien été enregistrée.<br>
Son numéro de réservation est le: <?php echo $_SESSION['noHebergement'],$_SESSION['dateDebResa']; ?><br>
Le montant de vos arhes est de: <?php echo $_SESSION['montantArhes']; ?>€
<?php
unset($_SESSION['noHebergement']);
unset($_SESSION['dateDebResa']);
unset($_SESSION['montantArhes']);
?>