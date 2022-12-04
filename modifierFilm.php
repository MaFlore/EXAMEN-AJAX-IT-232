<?php
require('connexion.php');
header("Content-Type: text/plain; charset=utf-8");
header("Cache-Control: no-cache . private");
header("Pragma: no-cache");
sleep(2);

$parametresJSON = file_get_contents('php://input');

$objetJSON = json_decode($parametresJSON);

$id = $objetJSON->id;
$titre = $objetJSON->titre;
$auteur = $objetJSON->auteur;
$producteur = $objetJSON->producteur;
$description = $objetJSON->description;

$film = $bdd->prepare('UPDATE film SET titre_film=:titre_film, auteur_film=:auteur_film, producteur_film=:producteur_film, descritpion_film=:descritpion_film WHERE id=:id');
$film->execute([
        'id' => $id,
        'titre_film' => $titre,
        'auteur_film' => $auteur,
        'producteur_film' => $producteur,
        'descritpion_film' => $description,
]);

?>