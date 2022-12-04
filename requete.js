function creationObjetXMLHttpRequest() {
    var resultat = null;
    try {
        resultat = new XMLHttpRequest();
    } catch (error) {
        try {
            resultat = new ActiveXObject("Msxlm2.XMLHTTP");
        } catch (error) {
            try {
                resultat = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (error) {
                resultat = null;
            }
        }
    }
    return resultat;
}

function ajouter() {

    var titre = document.getElementById('titre').value;
    var auteur = document.getElementById('auteur').value;
    var producteur = document.getElementById('producteur').value;
    var description = document.getElementById('description').value;

    if (titre = "" || auteur == "" || producteur == "" || description == "") {
        alert('Veuillez remplir tous les champs');
    } else {
        var objetJSON = new Object();
        objetJSON.titre = document.getElementById('titre').value;
        objetJSON.auteur = document.getElementById('auteur').value;
        objetJSON.producteur = document.getElementById('producteur').value;
        objetJSON.description = document.getElementById('description').value;

        var parametresJSON = JSON.stringify(objetJSON);

        objetXMLHttpRequest = creationObjetXMLHttpRequest();

        objetXMLHttpRequest.open('post', 'ajoutFilm.php', true);

        objetXMLHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        objetXMLHttpRequest.onreadystatechange = fonctionDeRappel;

        document.getElementById('formulaire').style.visibility = 'hidden'

        objetXMLHttpRequest.send(parametresJSON);
    }
}

function modifier() {

    var titre = document.getElementById('titre').value;
    var auteur = document.getElementById('auteur').value;
    var producteur = document.getElementById('producteur').value;
    var description = document.getElementById('description').value;

    if (titre = "" || auteur == "" || producteur == "" || description == "") {
        alert('Veuillez remplir tous les champs');
    } else {
        var objetJSON = new Object();
        // console.log(document.getElementById('titre').value);
        objetJSON.id = document.getElementById('idFilm').value;
        objetJSON.titre = document.getElementById('titre').value;
        objetJSON.auteur = document.getElementById('auteur').value;
        objetJSON.producteur = document.getElementById('producteur').value;
        objetJSON.description = document.getElementById('description').value;

        var parametresJSON = JSON.stringify(objetJSON);

        objetXMLHttpRequest = creationObjetXMLHttpRequest();

        objetXMLHttpRequest.open('post', 'modifierFilm.php', true);

        objetXMLHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        objetXMLHttpRequest.onreadystatechange = fonctionDeRappel;

        document.getElementById('formulaire').style.visibility = 'hidden'

        objetXMLHttpRequest.send(parametresJSON);
    }
}

function fonctionDeRappel() {

    if (objetXMLHttpRequest.readyState == 4) {

        if (objetXMLHttpRequest.status == 200) {
            window.location.href = "index.php"
        } else {

        }
    }

}