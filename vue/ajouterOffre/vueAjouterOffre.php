Ajouter une offre:<br><br>
<form enctype="multipart/form-data" method="post" action="modele/ajouterOffre/verifAjouterOffre.php" id="formAjoutOffre" onsubmit="return VerifChampsAjoutOffre()" 
      onkeyup="VerifChiffresAjouterOffre()">
    Nom de l'hébergement: <input type="text" name="nomOffre" id="nomOffre"><br>
    Type d'hébergement:
    <select name='typeOffre' id='typeOffre'>
        <?php
        while ($data) {
            echo '<option value=\'', $data['CODETYPEHEB'], '\'>', $data['NOMTYPEHEB'], '</option>';
            $data = $sql->fetch();
        }
        ?>
    </select><br>
    Nombre de places: 
    <select name="nbPlacesOffre" id="nbPlacesOffre">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select><br>
    Surface: <input type="text" name="surfaceOffre" id="surfaceOffre">m²<br>
    Internet: 
    <select name="internetOffre" id="internetOffre">
        <option>Oui</option>
        <option>Non</option>
    </select><br>
    Année de la dernière remise en état: <input type="text" name="anneeRemiseOffre" id="anneeRemiseOffre"><br>
    Secteur de l'hébergement: <input type="text" name="secteurOffre" id="secteurOffre"><br>
    Orientation de l'hébergement: 
    <select name="orientationOffre" id="orientationOffre">
        <option>Nord</option>
        <option>Sud</option>
        <option>Est</option>
        <option>Ouest</option>  
    </select><br>
    Etat de l'hébergement:
    <select name="etatOffre" id="etatOffre">
        <option>Neuf</option>
        <option>Bon etat</option>
        <option>Moyen</option>
    </select><br>
    Description de l'offre: <input type="text" name="descriOffre" id="descriOffre"><br>
    Image: <input type="file" name="imageUpload"><br>
    Tarif haute saison: <input type="text" name="tarifHS" id="tarifHS">€<br>
    Tarif basse saison: <input type="text" name="tarifBS" id="tarifBS">€<br>
    <input type="submit" value="Envoyer">
</form><br>
<a href="offres.php">Retour</a>