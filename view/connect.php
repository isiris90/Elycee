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
                    Zone de connexion
                </h2>
                <p>
                    Si vous êtes élève de ce lycée ou prof vous pouvez accéder à la zone de QCM
                </p>
            </div>
        </div>
    </div>
    <div class="row-actu">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->


                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Votre identifiant</label>
                    <div class="controls">
                        <input id="textinput" name="textinput" type="text" placeholder="adresse mail" class="input-xlarge">

                    </div>
                </div>

                <!-- Password input-->
                <div class="control-group">
                    <label class="control-label" for="passwordinput">Votre mot de pass</label>
                    <div class="controls">
                        <input id="passwordinput" name="passwordinput" type="password" placeholder="mot de pass" class="input-xlarge">

                    </div>
                </div>

                <!-- Button -->
                <div class="control-group">
                    <div class="controls">
                        <br/>
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Connexion</button>
                    </div>
                </div>

            </fieldset>
        </form>




    </div>
</div>

<!--ICI LE FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>