function VerifChampsConnexion() {
    var nomUtilisateur = document.getElementById("formConnexion").loginUtilisateur.value;
    var mdpUtilisateur = document.getElementById("formConnexion").mdpUtilisateur.value;
    if (nomUtilisateur === "" || mdpUtilisateur === "") {
        alert("Erreur, vous n'avez pas rempli tout les champs.");
        return false;
    } else
        return true;
}

function VerifChampsInscription() {
    var loginUtilisateur = document.getElementById("formInscription").loginUtilisateur.value;
    var nomUtilisateur = document.getElementById("formInscription").nomUtilisateur.value;
    var prenomUtilisateur = document.getElementById("formInscription").prenomUtilisateur.value;
    var mdpUtilisateur = document.getElementById("formInscription").mdpUtilisateur.value;
    var confirmMdpUtilisateur = document.getElementById("formInscription").confirmMdpUtilisateur.value;
    if (loginUtilisateur === "" || nomUtilisateur === ""
            || prenomUtilisateur === "" || mdpUtilisateur === "") {
        alert("Erreur, vous n'avez pas rempli tout les champs.");
        return false;
    } else if (mdpUtilisateur !== confirmMdpUtilisateur) {
        alert("Erreur, vos mots de passe ne correspondent pas.");
        return false;
    } else {
        return true;
    }
}

function VerifChampsAjoutOffre() {
    var nomOffre = document.getElementById("formAjoutOffre").nomOffre.value;
    if (nomOffre === "") {
        alert("Erreur, vous n'avez pas rempli tout les champs.");
        return false;
    } else {
        return true;
    }
}

function VerifChiffresAjouterOffre() {
    var surfaceOffre = document.getElementById("formAjouterOffre").surfaceOffre.value;
    if (/[a-z]/i.match(surfaceOffre)) {
        alert('erreur');
        return false;
    }
}

function OnChangeModifReservation() {
    var e = document.getElementById("selectModifReservation");
    var selectedIndex = e.options[e.selectedIndex].value;
    if (selectedIndex == 1) {
        document.getElementById("formModifReservation").date.setAttribute("name", "accuse");
    } else if (selectedIndex == 2) {
        document.getElementById("formModifReservation").date.setAttribute("name", "arrhes");
    }
}