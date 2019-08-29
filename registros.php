<?php

    require_once('banco.class.php');


    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $objeto = new db();
    $link = $objeto->conectando_banco();

    $sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha')";
    

    mysqli_query($link, $sql);

    

?>