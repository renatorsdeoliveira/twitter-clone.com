<?php

    require_once('banco.class.php');


    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $objeto = new db();
    $link = $objeto->conectando_banco();

    $sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha')";

    if(mysqli_query($link, $sql)){
        echo "Usuario registrado com sucesso";
    }else{
        echo "Erro ao registrar o usuario";
    }


    // header("Location: http://localhost/twitter-clone.com/sucesso.php"); 

?>