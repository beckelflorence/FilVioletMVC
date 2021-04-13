<?php
require 'public/functions/bdd.php';
require 'public/class/user-class.php';

$userManager = new UserManager($bdd);
?>
<div class="corps">
    <h1>Identification</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td> <label for="pseudo">Nom : </label></td>
                <td> <input type="text" name="name"> </input></td>
            </tr>
            <tr>
                <td> <label for="pseudo">Prénom : </label></td>
                <td> <input type="text" name="surname"> </input></td>
            </tr>
            <tr>
                <td> <label for="mail">Email : </label></td>
                <td> <input type="mail" name="mail"> </input></td>
            </tr>
            <tr>
                <td> <label for="date">Date d'anniversaire : </label></td>
                <td> <input type="date" name="date"> </input></td>
            </tr>
            <tr>
                <td> <label for="password">Mot de passe : </label></td>
                <td> <input type="password" name="password"> </input></td>
            </tr>
            <tr>
                <td> <label for="verifPassword">Confirmer votre mot de passe : </label></td>
                <td> <input type="password" name="verifPassword"> </input></td>
            </tr>
        </table>
        <input type="submit" value="S'inscrire" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['password'] != '') {
            if (($_POST['password'] == $_POST['verifPassword'])) {
                $post =  [
                    'nom_u' => $_POST['name'],
                    'prenom_u' => $_POST['surname'],
                    'mail_u' => $_POST['mail'],
                    'avatar_u' => NULL,
                    'date_naissance_u' => $_POST['date'],
                    'password_u' => password_hash($_POST['password'], PASSWORD_BCRYPT)
                ];
                $user = new USER();
                $user->hydrate($post);

                $userManager->add($user);
                $_SESSION['mail_u'] = $user->mail_u();
                $_SESSION['id_user'] = $user->id_user();
                header("Location: http://localhost/mvcFlo/public/pages/deconnexion.php");
            } else {
                echo '<h2>Les mot de passe ne correspondent pas</h2>';
            }
        } else {
            echo '<h2>Veuillez renseigner les champs demandés Merci !</h2>';
        }
    }
    ?>