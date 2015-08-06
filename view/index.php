<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/reset.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
        <script src="../js/bootstrap.min.js"></script>

        <title>Accueil</title>
    </head>

    <body>
        <?php require('../src/index_src.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   <!-- BARRE DE NAVIGATION -->
                    <?php include("header.php"); ?>

                    <div class="jumbotron">
                        <h2>Bienvenue sur le site <br/>du lycée d'Ardèche</h2>
                        <p>Vous trouverez ici l'ensemble des actualitées du monde informatique et du web.
                           Mais aussi des informations complémentaires sur l'établissement.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row-actu">
                <!-- AFFICHAGE DES ARTICLES -->
                <?php 
                    while ($donnees_lecture_articles = $lecture_articles->fetch()){ 
                ?>
                        <div class="col-md-4">
                            <h2><?php echo $donnees_lecture_articles['titre']; ?></h2>
                            <img src="<?php echo $donnees_lecture_articles['url_image']; ?>" class="img-responsive" alt="<?php $donnees_lecture_articles['url_image']; ?>" />
                            <p><?php echo $donnees_lecture_articles['extrait']; ?></p>
                            <p>Publié le: <?php echo $donnees_lecture_articles['date_publication_fr']; ?></p>
                            <?php $donnees_lecture_auteur = $lecture_auteur->fetch() ?>
                            <p>Auteur: <?php echo $donnees_lecture_auteur['nom_auteur']; ?></p>
                            <p>
                                <a href="actualite.php?numero_article=<?php echo $donnees_lecture_articles['id']; ?>" 
                                class="btn btn-xs btn-primary">Lire la suite »</a>
                            </p>
                        </div>
                <?php
                    }
                    $lecture_articles->closeCursor();
                    $lecture_auteur->closeCursor();
                ?>
            
                <div class="col-md-4">
                    
                    <h2>A lire aussi</h2>
                    <!-- AFFICHAGE DES TITRES SUPPLEMENTAIRES -->
                    <?php
                        while ($donnees_lecture_titres = $lecture_titres->fetch()) {
                    ?> 
                            <p>
                                <a class="l-actu" href="actualite.php?numero_article=<?php echo $donnees_lecture_titres['id']; ?>">
                                    <?php echo $donnees_lecture_titres['titre']; ?>
                                </a>
                            </p>    
                    <?php 
                        } 
                        $lecture_titres->closeCursor();
                    ?>
                    
                    <p><a href="actualites.php" class="btn btn-sm btn-danger">Toutes nos actualitées</a></p>
                    
                    <!-- ESPACE TWITTER -->        
                    <p>
                        <a class="twitter-timeline" href="https://twitter.com/hashtag/lyceeardeche" data-widget-id="554999390436622336">Tweets sur #lyceeardeche</a>
                        <script>
                            !function(d,s,id){
                                var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                                if(!d.getElementById(id)){
                                    js=d.createElement(s);
                                    js.id=id;
                                    js.src=p+"://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js,fjs);
                                }
                            }(document,"script","twitter-wjs");
                        </script>
                    </p>

                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include("footer.php"); ?>
    </body>

</html>

<!-- <a class="img-actu" href="#">image de l'actu</a> -->