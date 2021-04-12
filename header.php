<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <header class='my-5'>
        <nav class="row">
            <a href="index.php" class="col-1">
                <i class="fas fa-home">Accueil</i>
            </a>
            <?php
            if (!isset($_SESSION['mail_u'])) {
                echo '
                            <a href="http://localhost/mvc/index.php?action=signin" class="col-1"> 
                                <i class="fas fa-sign-in-alt">  S\'idendifier</i>
                            </a>
                            <a href="index.php?action=registrer" class="col-1">
                            <i class="far fa-save">  S\'enregistrer</i>    
                            </a>
                        ';
            } else {
                echo '
                                <a href="index.php?action=listUser" class="col-1">
                                    <i class="fas fa-desktop">Utilisateurs</i>
                                </a>
                                <a href="index.php?action=listAuteur" class="col-1">
                                    <i class="fas fa-th-list">Auteurs</i>
                                </a>
                                <a href= "index.php?action=listLivre" class="col-1">
                                <i class="fas fa-book">Livres</i>
                                </a>
                                <a href="public/pages/deconnexion.php" class="col-1">
                                    <i class="fas fa-power-off">Déconnexion</i>
                                </a>
                        ';
            }

            ?>
        </nav>
    </header>