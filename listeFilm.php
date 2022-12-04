<?php
require('connexion.php');
?>
<table border="1">
    <thead>
        <tr>
            <th>Titre Film</th>
            <th>Auteur Film</th>
            <th>Producteur Film</th>
            <th>Description Film</th>
            <th>Actions</th>
        </tr>
    </thead>
    <?php
    $film=$bdd->query("SELECT * FROM film");
    while($element=$film->fetch()){
    ?>
    <tbody>
        <tr>
            <td><?php echo $element['titre_film']?></td>
            <td><?php echo $element['auteur_film']?></td>
            <td><?php echo $element['producteur_film']?></td>
            <td><?php echo $element['descritpion_film']?></td>
            <td><a href="modifier.php?id=<?= $element['id']?>">Modifier</a>
                <a href="index.php?id=<?= $element['id']?>">Supprimer</a>
            </td>
        </tr>
    </tbody>
    <?php 
} ?>
</table>