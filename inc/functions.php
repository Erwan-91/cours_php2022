<?php
// une première fonction
function minpap(){
    echo"<p class=\"lead\">Minute papillon ! </p>";
}
// fonction pour afficher le jour de la semaine
function quelJour(){
    setlocale(LC_ALL, 'fr_FR.UTF-8');
    echo "<p class=\"alert alert-primary w-50 mx-auto text-center\">Nous sommes le " . strftime('%A %e %B %Y') . ".</p>";
    echo "<p class=\"alert alert-primary w-50 mx-auto text-center\">We are " . strftime("l j F Y") . ".</p>";
}
// création d'une fonction qui var_dump les données d'un tableau
function jevar_dump($mavariable){ // la fonction nommée avec son paramètre : une variable qu'on va pouvoir modifier pour mettre le nom de celle qu'on veut afficher
    echo "<small class=\"bg-success text-white p-2\">var_dump :<pre class=\"alert alert-success w-75\">";
    var_dump($mavariable);
    echo "</pre>";

}
function jeprint_r($mavariable){
    echo "<small class=\"bg-success text-white p-2\">var_dump :<pre class=\"alert alert-success w-75\">";
    var_dump($mavariable);
    echo "</pre>";
}
?>