<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <script src="../js/bootstrap.min.js"></script>

    <title>Elycee</title>
</head>

<body><div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <!--ICI LA BARRE DE NAVIGATION -->
            <?php include("header.php"); ?>

            </ul>
            <div class="jumbotron">
                <h2>
                    Retrouvez l'ensemble de <br/>nos actualités
                </h2>
                <p>
                    Vous trouverez ici l'ensemble des actualitées liées au lycée d'ardèche. Mais aussi des informations complémentaire sur l'établissement.
                </p>
            </div>
        </div>
    </div>
    <div class="row-actu">
        <div class="col-md-8">
            <div class="lesactus">
                <h2>
                    Les suites récurrentes
                </h2>
                <a class="img-actu" href="#">image de l'actu</a>
                <p>
                    En mathématiques, on appelle suite récurrente linéaire d’ordre p, toute suite à valeurs dans un corps commutatif K (généralement \mathbb C ou \R) définie pour tout  n \geq n_0 par la relation de récurrence suivante :

                    a_0, a_1, …a_{p-1} étant p scalaires fixés de K (a_0 non nul), pour tout  n \geq n_0, on a

                    u_{n+p} = a_0u_n + a_1u_{n+1} + \cdots + a_{p-1}u_{n+p-1}
                    Une telle suite est entièrement déterminée par la donnée des p premiers termes de la suite et par la relation de récurrence.

                    Les suites récurrentes linéaires d’ordre 1 s’appellent plus simplement des suites géométriques de raison a_0.

                    L'étude des suites récurrentes linéaires d'ordre supérieur se ramène à un problème d'algèbre linéaire. L'expression du terme général d'une telle suite est possible pour peu qu'on soit capable de factoriser un polynôme qui lui est associé, appelé polynôme caractéristique ; le polynôme caractéristique associé à une suite vérifiant la relation de récurrence ci-dessus est :

                    P(X) = X^p - \sum_{i = 0}^{p-1}a_iX^i=X^p-a_{p-1}X^{p-1}-a_{p-2} X^{p-2}-\dots-a_1 X-a_0.
                    Son degré est ainsi égal à l'ordre de la relation de récurrence. En particulier, dans le cas des suites d'ordre 2, le polynôme est de degré 2 et peut donc être factorisé à l'aide d'un calcul de discriminant. Ainsi, le terme général des suites récurrentes linéaires d'ordre 2, peut être exprimé en utilisant seulement les deux premiers termes, quelques valeurs constantes, quelques opérations élémentaires de l'arithmétique (addition, soustraction, multiplication, exponentielle) et les fonctions sinus et cosinus (si le corps des scalaires est le corps des réels). Une des suites de ce type est la très célèbre suite de Fibonacci qui peut s'exprimer à partir de puissances faisant intervenir le nombre d'or.
                </p>

            </div>


        </div>



        <div class="col-md-4">
            <h2>
                A lire aussi
            </h2>
            <ul>
                <li><a class="l-actu" href="#"><p>» Philae Endormi</p></a></li>
                <li><a class="l-actu" href="#"><p>» Fusée Antares</p></a></li>
                <br>
            </ul>
            <p>
                <a class="twitter-timeline" href="https://twitter.com/hashtag/lyceeardeche" data-widget-id="554999390436622336">Tweets sur #lyceeardeche</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </p>
        </div>
    </div>
</div>

<!--ICI LE FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>