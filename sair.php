<?php 

    session_start();

    unset($_SESSION['usuario']);
    unset($_SESSION['email']);

    header('Location: http://localhost/twitter-clone.com/index.php');

?>


