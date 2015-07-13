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

        </div>
    </div>
    <div class="row-actu">
        <div class="col-md-6">

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Gestion des fiches
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <div class="space"></div>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Gestion des articles
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li>Les derniers articles</li>
                    <li><a href="#">Machine de turinh</a></li>
                    <li><a href="#">Suite numérique</a></li>
                    <li><a href="#">Musique et fraction</a></li>
                    <li><a href="#">Voir tout les articles</a></li>
                </ul>
            </div>
            <div class="space"></div>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Gestion des eleves
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li>Les derniers articles</li>
                    <li><a href="#">Machine de turinh</a></li>
                    <li><a href="#">Suite numérique</a></li>
                    <li><a href="#">Musique et fraction</a></li>
                    <li><a href="#">Voir tout les articles</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Statistiques</h2>
            <ul>
                <li>
                    <img src="../img/facebook.png" alt="logo facebook" style="width:25px; height:25px;" /> 43 commentaires
                </li>
                <li>
                    <img src="../img/facebook.png" alt="logo facebook" style="width:25px; height:25px;" /> 30 fiches publiés
                </li>
                <li>
                    <img src="../img/facebook.png" alt="logo facebook" style="width:25px; height:25px;" /> 150 eleves
                </li>
            </ul>
        </div>
    </div>
</div>

<!--ICI LE FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>