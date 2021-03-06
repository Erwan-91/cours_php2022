<!doctype html>
<html lang="fr">

<head>
    <title>Cours PHP 7 - Les conditions</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_php2022 - Introduction</title>
    <!-- Mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="bg-light">
        <!-- JUNBOTRON -->
        <div class="jumbotron text-center">
            <h1 class="display-3">Cours PHP 7 - Les conditions</h1>
            <hr>
            <p class="lead bg-light">On retrouve dans PHP la plupart des instructions de conrtrôle des scripts. Indispensables à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. PHP utilise un syntaxe très proche de celle du langage C. Ceux qui sont déjà pratiqué un langage tel que le C ou plus simplement JavaScript seront en pays de connaissance.</p>
        </div>

        <!-- LANGAGE PRINCIPAL -->

        <div class="row bg-light">
            <!-- La barre de navigation en include (penser à toujours ajoute le JS en fin de la page) -->
            <?php
            require("../inc/sidenav.inc.php");
            ?>
            <!-- ========================================================= -->
            <!-- Contenu principal -->
            <!-- ========================================================= -->
            <div class="col-sm-8">
                <main class="container-fluid bg-light">
                    <div class="row">
                        <hr>

                        <h2 class="col-sm-12 text-center" id="conditions"><u>1 - Les conditions avec "if"</u></h2>
                        <div class="col-sm-12 col-md-4" id="if">
                            <h3 class="text-center">1 - IF</h3>
                            <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionelles. Présente dans tous les langages de progrommation, elle est essentielle puisqu'elle permet d'orienter l'éxéctuion du script en fonction de la valeur booléenne d'une expression.</p>
                            <?php
                            $a = 100;
                            $b = 55;
                            $c = 25;
                            $d = 8;

                            if ($a > $b && $b > $c) {
                                echo "<p class=\"alert alert-success w-75 mx-auto text-center\">Les deux conditions sont respectées.</p>";
                            }
                            ?>
                        </div><!-- fin de la colonne -->
                        <div class="col-sm-12 col-md-4" id="ifElse">
                            <h3 class="text-center">2 - IF</h3>
                            <p>L'instruction <code>if...else</code> permet de traiter le cas où l'expression conditionnelle est TRUE et en même temps d'écrir un traitement de rechange quand elle est évaluée à FALSE, ce qui ne permet pas une instruction if seule. L'instruction ou le bloc qui suit <code>else</code> est alors le seul a être éxécuté. L'éxéctuion continue alors ensuite normalement après le bloc.</p>
                            <?php
                            if ($a > $b) {
                                echo "<p class=\"alert alert-success w-75 mx-auto text-center\">$a est supérieur à $b.</p>";
                            } else {
                                echo "<p class=\"alert alert-danger w-75 mx-auto text-center\">$a est inférieur à $b.</p>";
                            }
                            ?>
                            <p>Le bloc qui suit les intructions if ou else peut contenir toutes sortes d'instructions; y compris d'autres intructions if...else. Nous obtenons dans ce cas, une syntaxe plus complète.</p>
                        </div><!-- fin de la colonne -->
                        <div class="col-sm-12 col-md-4" id="ifElseIfElse">
                            <h3 class="text-center">3 - if...else if...else</h3>
                            <p>Nous aurons ici une sytaxe un peu plus compliquée de la forme suivante: <code>if(condition){} else if(condition) else if(condition){} else{} </code></p>
                            <p>ici notre variable d est égale à _. On teste différentes conditions pour voir laquelle est vrais grâce à un <code>if...else if...else</code>Ici la première condition est vraie</p>
                            <?php
                            echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                            if ($d == 8) {
                                echo "Réponse 1: \$d = 8";
                            } else if ($d != 10) {
                                echo "Réponse 2: \$d est différent de 10";
                            } else {
                                echo "Réponse 3: Les conditions précédentes sont FALSE.";
                            }
                            echo "</p>";
                            ?>
                            <?php
                            $e = 10;
                            $f = 5;
                            $g = 2;
                            echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                            if ($e == 9 || $f < $g) {
                                echo "Au moins une des deux conditions est remplie.";
                            } else {
                                echo "Les deux conditions sont FALSE.";
                            }
                            echo "</p>";
                            ?>
                        </div><!-- fin de la colonne -->
                        <div class="col-sm-12 col-md-6">
                            <h3 class="text-center" id="ternaire">4 - La méthode ternaire</h3>
                            <p>Il existe d'autre façon à écrire un if else: la méthode ternaire. Avec cette méthode, le code sera le suivant: <code>(condition) ? code à éxécuter si la condition retourne TRUE: code à retourner si le code renvoie FALSE; </code></p>
                            <?php
                            $h = 10;
                            // en ternaire
                            echo ($h == 10) ? "<p class=\"alert alert-success w-75 mx-auto text-center\">\$h est égal à 10.</p>" : "<p class=\"alert alert-danger w-75 mx-auto text-center\">\$h est différent à 10.</p>";
                            ?>
                        </div><!-- fin de la colonne -->
                        <div class="col-sm-12 col-md-6">
                            <h3 class="text-center" id="switch">5 - La méthode Switch et Case</h3>
                            <p>switch permets de comparé à une multitude de valeurs, comme l'instruction <code>if...else if...else</code></p>
                            <?php
                            echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                            $dept = 91;
                            switch ($dept) {
                                case 75:
                                    echo "Paris";
                                    break;
                                case 29:
                                    echo "Finistère";
                                    break;
                                case 91:
                                    echo "Essonne";
                                    break;
                                default:
                                    echo "Département inconnu! Revoyez vos cours de Géographie.";
                                    break;
                            }
                            echo "</p>";
                            ?>
                        </div><!-- fin de la colonne -->
                    </div><!-- fin de la rangée -->
                    <hr>
                    <div class="row">
                        <div class="col-sm-12" id="while">
                            <h2 class="text-center"><u>2- Les boucles</u></h2>
                            <p>Les boucles permettent de repeter les opératiens élémentaires un grand nombre de fois sans avoir à réecrire le même code</p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3 class="text-center">1- Boucle While</h3>
                            <p>La boucle <code>While</code> permet d'affiner le comportement d'une boucle en réalisant une action de manière répétitive tant qu'une condition est verifiée ou qu'une expression quelconque est évaluée à TRUE et donc de l'arrêter quand elle n'est plus vérifiée, évaluée à FALSE.</p>
                            <div class="alert alert-success w-75 mx-auto text-center">
                                <?php
                                $n = 1;
                                while ($n % 7 != 0) { // le script continue jusqu'à trouver un multiple de 7 
                                    $n = rand(1, 100); //rand fait un tirage de nombre aléatoires compris entre 1 et 100 rand() pour random
                                    echo $n . "&nbsp; -";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3 class="text-center">2- Boucle do...While</h3>
                            <p>Avec l'instruction <code>Do... While</code>, la condition n'est évaluée qu'après une première execution des instructions du bloc compris entre do et while</p>
                            <div class="alert alert-success w-75 mx-auto text-center">
                                <?php
                                $n2 = 1;
                                do {
                                    $n2 = rand(1, 100);
                                    echo $n2 . "&nbsp; * ";
                                } while ($n2 % 7 != 0); // le script s'arrête lorsque l'on à un multiple de
                                ?>
                            </div>
                        </div>
                        <!-- fin de la colonne -->
                        <div class="col-sm-12 col-md-6">
                            <h3 class="text-center">3- Boucle for</h3>
                            <p>La boucle <code>For</code>, est plus concise, ramassée que la boucle <code>For(initialisation;condition; incrémentation){ code à éxécuter }</code></p>
                            <div class="alert alert-success w-75 mx-auto text-center">
                                <?php
                                // on va afficher les puissance de 2 jusqu'a 8
                                for ($i = 0; $i <= 8; $i++) {
                                    $tab[$i] = pow(2, $i); // à l'aide d'une boucle et de la fonction pow()
                                } //création d'un tableau avec 9 éléments 
                                var_dump($tab);
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3 class="text-center">4- Boucle foreach</h3>
                            <p>La boucle <code>Foreach</code>, (pour chaque passage) est efficace pour afficher et lister les éléments contenues dans un tableau.</p>
                            <div class="alert alert-success w-75 mx-auto text-center">
                                <?php
                                $val = "Une valeur";
                                echo "Les puissances de 2 sont : ";
                                foreach ($tab as $val) {
                                    echo $val . "-";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- fin de la colonne -->
                        <div class="col-sm-12">
                            <p class="alert alert-danger w-50 mx-auto text-center">Lecture des indices et des valeurs d'un tableau : <br>
                                <?php
                                //création d'un autre tableau avec la boucle for
                                for ($i = 0; $i <= 8; $i++) {
                                    $tableau[$i] = pow(2, $i);
                                }
                                // lecture des indices et des valeurs du tableau 
                                foreach ($tableau as $ind => $valeur) {
                                    echo "2 puissance $ind vaut $valeur <br>";
                                }
                                echo "Le dernier indice est $ind et la dernière valeur est $valeur ."
                                ?>



                            </p>
                        </div>
                        <!-- fin de la colonne -->
                    </div>
                    <!-- fin de la rangée  -->
                    <hr>
                    <br><br>

                </main>
            </div>
            <!-- fin de la partie principale  -->
            <div class="col-sm-2 aside">
                <ul>
                    <li><a href="#condition">Les conditions</a>
                        <ul>
                            <li><a href="#if">If</a></li>
                            <li><a href="#ifElse">ifElse</a></li>
                            <li><a href="#ifElseIf">ifElseIf</a></li>
                            <li><a href="#ternaire">Ternaire</a></li>
                            <li><a href="#switch">Switch</a></li>
                        </ul>
                    </li>
                    <li><a href="#while">Les Boucles</a></li>
                </ul>
            </div>
        </div>

        <!-- FIN DU CONTENU PRINIPAL -->






        <!-- LE FOOTER ON REQUIRE -->
        <?php
        require("../inc/footer.inc.php");
        ?>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>