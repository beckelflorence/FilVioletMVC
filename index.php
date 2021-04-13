<?php

include("header.php");
?>
<section class= "section1">
    <?php
    require 'controller/controller.auteur.php';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'signin':
                include("public/pages/signin.php");
                break;
            case 'listAuteur':
                listAuthors();
                break;
            case 'emprunt':
                emprunt();
                break;
            case 'auteur': {
                    if (isset($_GET['id'])) {
                        author();
                    } else {
                        echo 'Pas d\'identifiant selectionné';
                    }
                    break;
                }
            case 'listUser':
                include("public/pages/users.php");
                break;
            case 'formModif':
                include("public/pages/formModif.php");
                break;
            case 'registrer':
                include("public/pages/registrer.php");
                break;
            case 'suppr':
                include("public/pages/suppression.php");
                break;
            default:
                echo 'Error: Unknown value of action';
                break;
        }
    } else {
        if (isset($_SESSION['id_user'])) {
            echo '  
                <div>
                    <h2>
                        Bienvenue
                    </h2>
                </div>
            ';
        } else {
            echo '  
                    <div>
                        <h2>
                            Bienvenue
                        </h2>
                        <hr>
                        <h3>
                            Connectez-vous
                        </h3>
                    </div>
                ';
        }
    }
    ?>
</section>