
<?php

    session_start();

    require_once('Banco.php');

    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    //consulta no banco
    $sql = "SELECT id, usuario, email FROM usuarios WHERE usuario ='$usuario' AND  senha ='$senha'";

    //instanciado a nova classo banco
    $banco = new Banco();
    //Feita a conexão do banco
    $link = $banco->conectando_banco();

    //Trazendo o resultado da conexão do banco e da query
    $resultado_id = mysqli_query($link, $sql);
    
    // traformando em array
    $dados_usuarios = mysqli_fetch_array($resultado_id);

    if($dados_usuarios['usuario']){

        $_SESSION['id_usuario'] = $dados_usuarios['id'];
        $_SESSION['usuario'] = $dados_usuarios['usuario'];
        $_SESSION['email'] = $dados_usuarios['email'];
        header('Location: http://localhost/twitter-clone.com/home.php');
    }else{
      header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
    }

  



    






?>