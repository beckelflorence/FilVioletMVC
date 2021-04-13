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
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
        <a href="index.php">
        <h2>LIVRES</h2>
        </a>
            <a href="index.php">ACCUEIL</a>
            <?php
            if (!isset($_SESSION['mail_u'])) {
                echo '
                            <a href="index.php?action=signin""> 
                                 IDENTIFICATION
                            </a>
                            <a href="index.php?action=registrer">
                              INSCRIPTION  
                            </a>
                        ';
            } else {
                echo '
                                <a href="index.php?action=listUser">
                                    UTILISATEURS
                                </a>
                                <a href="index.php?action=listAuteur">
                                    AUTEURS
                                </a>
                                <a href= "index.php?action=emprunt">
                                EMPRUNT
                                </a>
                                <a href="public/pages/deconnexion.php">
                                    <i class="fas fa-power-off"></i>
                                </a>
                        ';
            }

            ?>
        </nav>
    </header>