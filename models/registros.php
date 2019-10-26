<?php

    require_once('banco.class.php');


    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);


    $objeto = new db();
    $link = $objeto->conectando_banco();

    //////////////////////////////////////////////////////////////////////////////
    // verificar usuario 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    if($resultado_id = mysqli_query($link, $sql)){
        $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);

        if(isset($dados_usuario['usuario'])){
            echo ' Usuário já cadastrado';
        }
        else{
            echo ' Usuário não casdastrado, pode cadastrar';
        }
    }else{
        echo 'erro ao tentar localizar o registro do usuário';
    }
    // verificar usuario 
    // verificar email 
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    if($resultado_id = mysqli_query($link,$sql)){
        $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);

        if($dados_usuario['email']){
            echo ' E-mail já cadastrado';
        }else{
            echo ' E-mail não casdastrado, pode cadastrar';

        }
    }else{
        echo 'erro ao tentar localizar o registro do usuário';
    }
    // verificar email 
    //////////////////////////////////////////////////////////////////////////////

    die();

    $sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha')";

    if(mysqli_query($link, $sql)){
        echo "Usuario registrado com sucesso";
    }else{
        echo "Erro ao registrar o usuario";
    }


    // header("Location: http://localhost/twitter-clone.com/sucesso.php"); 

?>