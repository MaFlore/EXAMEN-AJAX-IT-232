<?php
require('connexion.php');

$id = $_GET['id'];
$film = $bdd->prepare("SELECT * FROM film WHERE id=:id ");
$film->execute([':id'=> $id]);
$donnee = $film->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Modification film</title>
    <script type="text/javascript" src="requete.js"></script>
    <script type="text/javascript" src="json.js"></script>
</head>
<body>
<center>
    <div>
        <h3 id="message"></h3>
    </div>
    <div id="formulaire">
        <h1>Modification film</h1>
        <form method="post" action="">
            <input type="hidden" id="idFilm" name="idFilm" value="<?= $donnee->id;?>">
            <label for="titre">Titre Film :</label>
            <input type="text" id="titre" value="<?= $donnee->titre_film;?>" name="titre"/>
            <br>
            <br>
            <label for="auteur">Auteur Film :</label>
            <input type="text" id="auteur" value="<?= $donnee->auteur_film;?>" name="auteur"/>
            <br>
            <br>
            <label for="producteur">Producteur Film :</label>
            <input type="ntext"  id="producteur" name="producteur" value="<?= $donnee->producteur_film;?>"/>
            <br>
            <br>
            <label for="nombeBagage">Description Film :</label>
            <input type="textarea" id="description" value="<?= $donnee->descritpion_film;?>" name="description"/>
            <br>
            <br>
            <input type="button" onclick="modifier();" name="Modifier" id="button" value="Modifier"/>
        </form>
    </div>
</center>
</body>
</html>