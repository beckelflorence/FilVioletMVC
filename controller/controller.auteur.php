<?php
    require_once 'model/auteur.model.php';
    require_once 'public/class/emprunt-class.php';

    function listAuthors(){
        $authorManager=new AuteurManager();
        $authors = $authorManager->getAuthors();
        require 'view/listAuteurView.php';
    }

    function Emprunt(){
        $livreManager=new EmpruntManager('livre');
        $livres = $livreManager->getEmprunts();
        require 'view/empruntView.php';
    }

    function author(){
        $authorManager=new AuteurManager();
        $author=$authorManager->getAuthor($_GET['id']);
        require 'view/auteurView.php';
    }
?>