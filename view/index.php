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
                    Bienvenue sur le site <br/>du lycée d'Ardèche
                </h2>
                <p>
                    Vous trouverez ici l'ensemble des actualitées liées au lycée d'ardèche. Mais aussi des informations complémentaire sur l'établissement.
                </p>
            </div>
        </div>
    </div>
    <div class="row-actu">
        <div class="col-md-4">
            <h2>
                Les suites récurrentes
            </h2>
            <a class="img-actu" href="#">image de l'actu</a>
            <p>
                Une telle suite est entièrement déterminée par la donnée des p premiers termes de la suite et par la relation de récurrence.

                Les suites récurrentes linéaires d’ordre 1 s’appellent plus simplement des suites géométriques de raison a_0.
            </p>
            <p>
                <a href="#" class="btn btn-xs btn-primary">Lire la suite »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                La machine de Turing
            </h2>
            <a class="img-actu2" href="#">image de l'actu</a>
            <p>
                Une telle suite est entièrement déterminée par la donnée des p premiers termes de la suite et par la relation de récurrence.

                Les suites récurrentes linéaires d’ordre 1 s’appellent plus simplement des suites géométriques de raison a_0.
            </p>
            <p>
                <a href="#" class="btn btn-xs btn-primary">Lire la suite »</a>
            </p>
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