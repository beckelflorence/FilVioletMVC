<?php
    require_once 'model/auteur.model.php';
    require_once 'public/class/livre-class.php';
/*        |-> pour appeler 1 SEUL fois le fichiers model/auteur.model.php  
 */

    function listAuthors(){
        $authorManager=new AuteurManager();
        $authors = $authorManager->getAuthors();
        require 'view/listAuteurView.php';
    }

    function listLivre(){
        $livreManager=new LivreManager('livre');
        $livres = $livreManager->getLivres();
        require 'view/listLivreView.php';
    }

    function author(){
        $authorManager=new AuteurManager();
        $author=$authorManager->getAuthor($_GET['id']);
        require 'view/auteurView.php';
    }
?>