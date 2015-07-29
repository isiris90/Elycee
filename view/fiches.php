<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <script src="../js/bootstrap.min.js"></script>

    <title>Elycee - Dashboard fiches</title>
</head>

<body><div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <!--ICI LA BARRE DE NAVIGATION -->
            <?php include("header.php"); ?>

            </ul>

        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">Articles <button type="button" class="btn btn-danger">Ajouter</button> </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row marg-bot-15"></div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"> <button type="button" class="btn btn-default">Publier</button>  <button type="button" class="btn btn-success">Appliquer</button></div>
        <div class="col-md-2"></div>
    </div>
    <div class="row marg-bot-15"></div>
    <div class="row-actu">
        <div class="col-md-2"></div>
        <div class="col-md-8">





            <table class="table">
                <thead>
                <th><div class="checkbox-inline"><input type="checkbox"></div></th>
                <th>titre</th>
                <th>Auteur</th>
                <th>Commentaire</th>
                <th>statut</th>
                </thead>
                <tr>
                    <td><div class="checkbox-inline"><input type="checkbox"></div></td>
                    <td>La machine de Turing</td>
                    <td>Alan</td>
                    <td>Commentaire: 0</td>
                    <td>Statut</td>
                </tr>
                <tr>
                    <td><div class="checkbox-inline"><input type="checkbox"></div></td>
                    <td>Les suites numériques</td>
                    <td>Henri</td>
                    <td>Commentaire: 1</td>
                    <td>Statut</td>
                </tr>
                <tr>
                    <td><div class="checkbox-inline child"><input type="checkbox"></div></td>
                    <td>javascript</td>
                    <td>Thierry</td>
                    <td>Commentaire: 3</td>
                    <td>Statut</td>
                </tr>
            </table>
        </div>


    </div>
    <div class="col-md-2"></div>

    <!--ICI LE FOOTER -->
    <?php include("footer.php"); ?>

</body>
</html>