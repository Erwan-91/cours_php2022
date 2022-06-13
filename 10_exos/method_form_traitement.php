<?php
require_once ('../inc/functions.php');


if(!empty($_POST)){
    echo"<p> Prénom : " . $_POST['prenom'] . "</p>";
    echo"<p> Nom : " . $_POST['nom'] . "</p>";
    echo"<p> Commentaire : " . $_POST['commentaire'] . "</p>";
    
    // on va écrire le contenu du formulaire dans un fichier texte en l'absence de base de données
    $fichier = fopen('formulaire.txt', 'a');// fopen() en mode "a" permet de créer un fichier s'il n'existe pas, sinon cela permet de l'ouvrir.

    $donneeformulaire = $_POST['prenom'] . " " . $_POST['nom'] . " " . $_POST['commentaire'] . "\n"; // \n permet de créer un retour à la ligne dans le txt.

    fwrite($fichier, $donneeformulaire); // fwrite() écrit dans le fichier.
}
?>
