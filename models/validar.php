
<?php

    session_start();

    require_once('banco.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND  senha ='$senha'";

    $objeto = new db();
    $link = $objeto->conectando_banco();


    // consulta no banco
    $resultado_id = mysqli_query($link, $sql);
    
    // traformando em array
    $dados_usuarios = mysqli_fetch_array($resultado_id);

    if($dados_usuarios['usuario']){
        $_SESSION['usuario'] = $dados_usuarios['usuario'];
        $_SESSION['email'] = $dados_usuarios['email'];
        header('Location: http://localhost/twitter-clone.com/home.php');
    }else{
      header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
    }

  



    






?>