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


        </div>
    </div>
    <div class="row-actu">
        <div class="col-md-2"></div>
        <div class="col-md-4">

    <br/>

            <div class="padd-bot-160 ">
                <label class="list-group-item active" for="case">Gestion des Fiches</label>
            <input type="checkbox" id="case"/>
            <div id="surcouche">
                <div id="msgbox" class="list-group-item">

                    <ul class="">
                        <li><a class="btn btn-link" href="#">Action</a></li>
                        <li><a class="btn btn-link" href="#">Another action</a></li>
                        <li><a class="btn btn-link" href="#">Something else here</a></li>
                        <li><a class="btn btn-link" href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
            </div>

            <div class="space"></div>
            <div class="padd-bot-160">
                <label class="list-group-item active" for="case2">Gestion des Articles</label>
                <input type="checkbox" id="case2"/>
                <div id="surcouche">
                    <div id="msgbox" class="list-group-item">

                        <ul class="">
                            <li><a class="btn btn-link" href="#">Action</a></li>
                            <li><a class="btn btn-link" href="#">Another action</a></li>
                            <li><a class="btn btn-link" href="#">Something else here</a></li>
                            <li><a class="btn btn-link" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space"></div>
            <div class="padd-bot-160">
                <label class="list-group-item active" for="case3">Gestion des Eleves</label>
                <input type="checkbox" id="case3"/>
                <div id="surcouche">
                    <div id="msgbox" class="list-group-item">

                        <ul class="">
                            <li><a class="btn btn-link" href="#">Action</a></li>
                            <li><a class="btn btn-link" href="#">Another action</a></li>
                            <li><a class="btn btn-link" href="#">Something else here</a></li>
                            <li><a class="btn btn-link" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 list-group">
            <h2 class="list-group-item active">Statistiques</h2>
            <ul>
                <li class="list-group-item-text">
                    <p><img src="../img/facebook.png" alt="logo facebook" style="width:25px; height:25px;" /> 43 commentaires</p>
                </li>
                <li>
                    <p><img src="../img/facebook.png" alt="logo facebook" style="width:25px; height:25px;" /> 30 fiches publiés</p>
                </li>
                <li>
                    <p><img src="../img/facebook.png" alt="logo facebook" style="width:25px; height:25px;" /> 150 eleves</p>
                </li>
            </ul>

        </div>
    </div>
</div>

<!--ICI LE FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>