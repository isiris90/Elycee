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
                    Zone de contact
                </h2>
                <p>
                    Si vous avez une question n'hésitez pas
                </p>
            </div>
        </div>
    </div>
    <div class="row-actu">
        <div class="col-md-8">
        <form class="form-horizontal">
            <fieldset>



                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Adresse email</label>
                    <div class="controls">
                        <input id="textinput" name="email" type="email" placeholder="votre adresse mail" class="input-xlarge">

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Sujet du mail</label>
                    <div class="controls">
                        <input id="textinput" name="sujet" type="text" placeholder="sujet du mail" class="input-xlarge">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="control-group">
                    <label class="control-label" for="textarea">Votre message</label>
                    <div class="controls">
                        <textarea id="textarea" name="message">votre message ...</textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="control-group">
                    <div class="controls">
                        <button id="singlebutton" name="valid" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>

            </fieldset>

        </form>


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