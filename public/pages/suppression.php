<?php
    require 'public/functions/bdd.php';
    require 'public/class/user-class.php';
?>

<?php
    $login = $_SESSION['id_user'];
    $id=$_GET['id'];
    $userManager = new UserManager($bdd);
    $myUser=$userManager->get($id);
?>
    <div class="container-fluid bg-light">

            <div class="row">
                <h3 class="col-12">Voulez vous supprimer l'utilisateur <?php echo $myUser->nom_u()." - ".$myUser->prenom_u(); ?>?<h3> 
            </div>
            <div class="row">
                <a href="http://localhost/mvcFlo/index.php?action=suppr&rep=oui&id=<?php echo $_GET["id"] ?>" class="col-6">oui</a> 
                <a href="http://localhost/mvcFlo/index.php?action=suppr&rep=non&id=<?php echo $_GET["id"] ?>" class="col-6">non</a>
            </div>
<?php
            if(isset($_GET["rep"])){
                switch($_GET["rep"]){
                    case "oui":
                        $userManager->delete($myUser);
                        header('Location: http://localhost/mvcFlo/index.php?action=listUser');
                    break;
                    case "non":
                        header('Location: http://localhost/mvcFlo/index.php?action=listUser');
                    break;
                }
            }
        
?>
</div>