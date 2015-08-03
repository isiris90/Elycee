<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <script src="../js/bootstrap.min.js"></script>

    <title>Elycee - Repondre au QCM</title>
</head>

<body><div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <!--ICI LA BARRE DE NAVIGATION -->
            <?php include("header.php"); ?>


        </div>
    </div>
    <div class="row-actu">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2>La machine de Turing c'est quoi ?</h2>

            <br/>

            <div class="padd-bot-160 ">
                <form>
                    <div class="form-group">
                        <div>C'est une machien à laver ? </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Oui
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Non
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>C'est une machine qui sert à voyager dans le temps ? </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Oui
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Non
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>Une machine de Turing est un modèle abstrait du fonctionnement des appareils mécaniques de calcul</div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Oui
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Non
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Envoyer</button>
                </form>



            </div>

            <div class="space"></div>

        </div>

    </div>
</div>

<!--ICI LE FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>