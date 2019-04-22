<?php
/* Connexion à la BDD */

// Sous WAMP (Windows)
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

// Sous MAMP (Mac)
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');



// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM table');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <?php echo $donnees['champ1']; ?>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>