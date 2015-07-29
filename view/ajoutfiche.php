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
        <div class="col-md-8"><button type="button" class="btn btn-danger">Ajouter</button> </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row marg-bot-15"></div>

    <div class="row-actu">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p>niveau</p>
             <select class="form-control marg-bot-15">
                <option>Terminal S</option>
                <option>Premiere S</option>
             </select>
            <p>Nombre de choix (*)</p>
            <select class="form-control marg-bot-15">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <p>Titre (*)</p>
            <input class="form-control marg-bot-15" type="text" placeholder="Titre du QCM">

            <p>Rédaction de la question (*)</p>
            <div class="col-sm-12 marg-bot-15"><textarea class="form-control" rows="4" name="message"></textarea> </div>

           <button type="button" class="btn btn-success">Envoyer</button>



        </div>


    </div>
    <div class="col-md-2"></div>

    <!--ICI LE FOOTER -->
    <?php include("footer.php"); ?>

</body>
</html>