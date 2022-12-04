<?php
require('connexion.php');
header("Content-Type: text/plain; charset=utf-8");
header("Cache-Control: no-cache . private");
header("Pragma: no-cache");
sleep(2);

$parametresJSON = file_get_contents('php://input');

$objetJSON = json_decode($parametresJSON);

$titre = $objetJSON->titre;
$auteur = $objetJSON->auteur;
$producteur = $objetJSON->producteur;
$description = $objetJSON->description;

$film = $bdd->prepare('INSERT INTO film(titre_film, auteur_film, producteur_film, descritpion_film) VALUES(:titre_film, :auteur_film, :producteur_film, :descritpion_film)');
$film->execute([
        'titre_film' => $titre,
        'auteur_film' => $auteur,
        'producteur_film' => $producteur,
        'descritpion_film' => $description,
]);

?>