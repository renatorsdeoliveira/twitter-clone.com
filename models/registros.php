<?php

    require_once('Banco.php');


    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $usuario_existe = false;
    $email_existe = false;


    $objeto = new Banco();
    $link = $objeto->conectando_banco();

    //////////////////////////////////////////////////////////////////////////////
    // verificar usuario 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);

        if(isset($dados_usuario['usuario'])){
            $usuario_existe = true;
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
            $email_existe = true;;
        }
    }else{
        echo 'erro ao tentar localizar o registro do usuário';
    }


    if($usuario_existe || $email_existe){


        $retorno_get_existe = ''; 
        
        if($usuario_existe){
            $retorno_get_existe .= 'usuario_erro=1&'; 
        }
        if($email_existe){
            $retorno_get_existe .= 'email_erro=1&'; 
        }
             
        header('Location: http://localhost/twitter-clone.com/inscrevase.php?'.$retorno_get_existe);
        
        die();// Finaliza o leitura, funciona como o exit()
    }
    // verificar email 
    //////////////////////////////////////////////////////////////////////////////


    $sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha')";

    if(mysqli_query($link, $sql)){
        echo "Usuario registrado com sucesso";
    }else{
        echo "Erro ao registrar o usuario";
    }


    // header("Location: http://localhost/twitter-clone.com/sucesso.php"); 

?>