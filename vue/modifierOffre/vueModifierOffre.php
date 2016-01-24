Modification de l'offre:<br><br>
<form method="post" action="modele/modifierOffre/verifModifierOffre.php" id="formAjoutOffre">
    Nom de l'hébergement: <input type="text" name="nomOffre" id="nomOffre" value='<?php echo $data['NOMHEB']; ?>'><br>
    Nombre de places:
    <select name="nbPlacesOffre" id="nbPlacesOffre">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select><br>
    Surface: <input type="text" name="surfaceOffre" id="surfaceOffre" value='<?php echo $data['SURFACEHEB']; ?>'><br>
    Internet: 
    <select name="internetOffre" id="internetOffre">
        <option>Oui</option>
        <option>Non</option>
    </select><br>
    Année de la dernière remise en état: <input type="text" name="anneeRemiseOffre" id="anneeRemiseOffre" value='<?php echo $data['ANNEEHEB']; ?>'><br>
    Secteur de l'hébergement: <input type="text" name="secteurOffre" id="secteurOffre" value='<?php echo $data['SECTEURHEB']; ?>'><br>
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
    Description de l'offre: <input type="text" name="descriOffre" id="descriOffre" value='<?php echo $data['DESCRIHEB']; ?>'><br>
    Lien pour image: <input type="text" name="imgOffre" id="imgOffre" value='<?php echo $data['PHOTOHEB']; ?>'><br>
    <input type="submit" value="Envoyer">
</form><br>