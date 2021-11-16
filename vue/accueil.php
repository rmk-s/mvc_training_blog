<?php 
    require_once('./model/database.php'); 
    require_once('./model/post.php');
    require_once('./model/auteur.php');
    date_default_timezone_set('Europe/Paris');
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Nom de la page à determiner </title>
        
        <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
        <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    </head>


    <header >
        <h1> Ciné Tabs' </h1>
        <h3> Page d'accueil' </h3>
    </header>

    <body>

    <?php 
        var_dump($_GET);
    ?>

        <p> body de la page 1 </p>


        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button" href="#action=post?fnct=read">Example button</button>

            </div>
        </div>
        
        <p> body de la page 2 </p>

        <?php

        $post = new Post();

        $posts = $post->getPosts()->fetchAll();
        foreach($posts as $post){
         ?>
             <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">    
                <div class="card-body">
                     <h5 class="card-title"> 
                         <?php echo $post['titre'] ?> 
                     </h5>
                     <p class="card-text">
                         <?php echo $post['contenu'] ?>
                     </p>
                     <p class="card-text">
                         <?php 
                         $date = new \DateTime($post['createdAt']);
                         echo $date->format('d/m/Y');
                         ?>
                     </p>
                     <p class="card-text">
                         <?php 
                         $autId = $post['auteurId'];
                         echo $autId;
                         //$auter = new Auteur();
                         //echo 'toto' . $auter->getAuteur($autId);
                         
                         ?>
                     </p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
             </div>
             
        <?php } ?>


    </body>

    <footer>
        <p> Ce site à été réalisé par Karim, étudiant en Licence 3 MIAGE à l'université Panthéon Sorbonne.</p>
        <p> Pour me contacter :
            <a href="mailto:karimsebbah@etu.u-paris.fr"> Envoyez moi un mail </a>
        </p>
    </footer>

</html>