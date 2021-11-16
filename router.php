<?php


namespace App;

use App\controleur\PostController;

class Router{

    function run(){

        if(isset($_GET['action'])){
            $action = $_GET['action'];
            if('post' == $action){
                return (new PostController())->readArticle();
            }
            elseif ('contact' == $action){
                var_dump('contact');
            }
        }
        else{
            //header("Location: http://localhost/projet_blog/mvc_training_blog/localhost/index.php");
            require_once('vue/accueil.php');
        }
    }
}


?>

