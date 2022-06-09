<?php require_once('../inc/functions.php') ?>
<!doctype html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_php2022 - La Méthode GET</title>
    <!-- Mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="row">
        <div class="jumbotron bg-secondary text-center">
            <h1 class="display-3 pt-3">Cours_php2022 - La Méthode POST</h1>
            <p class="lead ">La méthode POST réceptionne les données d'un formulaire, $_POST est une superblobale</p>
        </div>
    </div>
    <div class="row">

        <?php
        require('../inc/sidenav.inc.php'); //ici on appelle le fichier sidenav.inc.php
        ?>

        <!-- ========================================================= -->
        <!-- Contenu principal -->
        <!-- ========================================================= -->
        <div class="col-sm-8">
            <main class="container-fluid">
                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="definiton"><u>1- Formulaire</u></h2>
                    <ul>
                        <li>Un formulaire doit toujours être dans une balise <code>form</code> pour fonctionner.</li>
                        <li>L'attribut method indique comment les données vont circuler vers le PHP.</li>
                        <li>L'attribut action indique l'URL de destination des données (si l'attribut est vide, les données vont vers le même script ou la même page).</li>
                        <li>Ensuite sur les names il ne faut pas les oublier sur les formulaires; ils constituent les indices de $_POST qui récéptionne les données.</li>
                    </ul>

                    <form action="../05_exos/method_form_traitement.php" method="$_POST" class="w-75 mx-auto">

                        <div class="form-group">
                            <label for="prenom">Prenom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                        <!-- fin champs prenom -->

                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <!-- fin champs nom -->



                        <div class="form-group">
                            <label for="commentaire">Commentaire :</label>
                            <textarea class="form-control" id="commentaire" rows="2" name="commentaire" required></textarea>
                        </div>
                        <!-- fin champs commentaire -->

                        <div class="text-center">
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </div>
                        <!-- fin bouton envoyer -->

                    </form>
                    <!-- fin formulaire -->

                </div>
                <!-- fin de la rangée  -->

                <hr>
                <br><br>

            </main>
        </div>

        <!-- fin de la partie principale, col-8 -->

    </div>
    <?php
    require('../inc/footer.inc.php'); //ici on appelle le fichier footer.inc.php
    ?>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!-- mon script js pour la navigation -->
    <script src="../inc/sidenav.js"></script>
</body>

</html>