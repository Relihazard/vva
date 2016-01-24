<form method="post" action="modele/inscription/validationInscription.php" id="formInscription" onsubmit="return VerifChampsInscription()"><br>
    <input type="text" name="loginUtilisateur" id="loginUtilisateur" placeholder="Votre login..."><br>
    <input type="text" name="nomUtilisateur" id="nomUtilisateur" placeholder="Votre nom..."><br>
    <input type="text" name="prenomUtilisateur" id="prenomUtilisateur" placeholder="Votre prénom..."><br>
    <input type="password" name="mdpUtilisateur" id="mdpUtilisateur" placeholder="Votre mot de passe..."><br>
    <input type="password" name="confirmMdpUtilisateur" id="confirmMdpUtilisateur" placeholder="Confirmez votre mot de passe..."><br>
    <input type="submit" value="Envoyer"><input type="reset" value="Reset">
</form>