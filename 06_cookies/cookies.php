<?php
require_once('../inc/functions.php');

// Si une langue est passée dans l'URL (l'internaute a cliqué sur un lien), on enverra la langue dans le cookie
if (isset($_GET['langue'])) {
    $langue = $_GET['langue'];
    jeprint_r($langue);
    // jevar_dump($langue);

}else if (isset($_COOKIE['langue'])) { //sinon si on a reçu un cookie appelé langue on a la valeur du site qui prendra la valeur de la langue
    $langue = ($_COOKIE['langue']);
}else {//langue par défaut
    $langue = 'fr';
    jeprint_r($langue);
}

//Envoie du cookie avec l'info de la langue

$expiration = time() + 365 * 24 * 60 * 60; // va nous donner la date actuelle exprimée en secondes
//time nous donne la date du jour depuis le debut de l'UNIX (1970), date exprimée en secondes
jeprint_r($expiration); //j'ajoute à la date du jour d'une année en secondes
setcookie('langue', $langue, $expiration); // fonction qui permet de créer un cookie, ce cookie est appelé langue et contient la valeur de $langue et la valeur de $expiration
//Il n'existe pas de fonction prédéfinie qui permette de supprimer un cookie. Pour rendre un cookie invalide, on utilise setcookie() avec le nom concerné et en mettant une date d'expiration à 0 ou anterieur à celle actuelle.
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours PHP7 - Cookies</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-light">
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - PDO</h1>
        <p class="lead">La superglobale $_COOKIE : un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui  contient des informations</p>


    </div>

    <!-- RANGÉE PRINCIPALE -->
    <div class="row">
        <!-- LA NAVIGATION EN INCLUDE (penser à ajouter le JS qui va avec en fin de page) -->
        <?php
        require('../inc/sidenav.inc.php')
        ?>

        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">

                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="definition">1. Introduction</h2>
                    <div class="col-sm-12">
                        <p>Les cookies sont automatiquement renvoyés au serveur web par le navigateur. Lorsque l'internaute navigue dans les pages concernées par le ou les cookies, PHP permet de récupèrer facilement les données contenues dans un cookie.
                        Non seulement on peut le fabriquer mais on peut aussi le récupèrer. Les informations sont stockées dans une superglobale : $_COOKIE . </p>
                        <p class="alert alert-danger w-50 mx-auto">Un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié, détourné ou volé. On n'y met aucune information sensible, comme les références bancaires, le numéro de sécu, le mot de passe, ni même le contenu d'un panier d'achat.</p>
                        <div class="w-75 text-center mx-auto">
                        <!-- On envoie la langue choisie par l'URL : la valeur "fr" par exemple est récupérée dans la superglobale $_GET -->

                        <a href="?langue=fr" class="btn btn-primary">Français</a> - 
                        <a href="?langue=en" class="btn btn-primary">English</a> -
                        <a href="?langue=es" class="btn btn-primary">Español</a> -
                        <a href="?langue=de" class="btn btn-primary">Deutsch</a> -

                        <?php
                            echo "<hr><br><h3>Langue du site : $langue</h3>";
                            echo time() ." : date actuelle en secondes depuis le 1er janvier 1970.";
                        ?>

                        </div>
                        
                    </div>
                    <!-- fin de col -->

                </div>
                <!-- fin de row -->


                <hr>
                <br><br>

            </main>
        </div> <!-- FIN DE LA PARTIE PRINCIPALE COL-8 -->

    </div>

    <!-- LE FOOTER EN REQUIRE -->
    <?php
    require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- le js pour la navigation  -->
    <script src="../inc/sidenav.js"></script>

</body>

</html>