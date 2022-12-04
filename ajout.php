<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ajout film</title>
    <script type="text/javascript" src="requete.js"></script>
    <script type="text/javascript" src="json.js"></script>
</head>
<body>
<center>
    <div>
        <h3 id="message"></h3>
    </div>
    <div id="formulaire">
        <h1>Ajout film</h1>
        <form method="post" action="">
            <label for="titre">Titre Film :</label>
            <input type="text" id="titre" name="titre" placeholder="Entrez le titre du film"/>
            <br>
            <br>
            <label for="auteur">Auteur Film :</label>
            <input type="text" id="auteur" name="auteur" placeholder="Entrez l'auteur du film"/>
            <br>
            <br>
            <label for="producteur">Producteur Film :</label>
            <input type="ntext"  id="producteur" name="producteur"/>
            <br>
            <br>
            <label for="nombeBagage">Description Film :</label>
            <input type="textarea" id="description" name="description"/>
            <br>
            <br>
            <input type="button" onclick="ajouter();" name="Ajouter" id="button" value="Ajouter"/>
        </form>
    </div>
</center>
</body>
</html>