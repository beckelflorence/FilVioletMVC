<?php
    session_start();
    $_SESSION=array();
    session_destroy();
    header('Location: http://localhost/mvcFlo/index.php');
?>