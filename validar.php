
<?php

    require_once('banco/banco.class.php');

    $usaruio = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario ='$usaruio' AND  senha ='$senha'";

    $objeto = new db();
    $link = $objeto->conectando_banco();


    // consulta no banco
    $resultado_id = mysqli_query($link, $sql);
    
    // traformando em array
    $dados_usuarios = mysqli_fetch_array($resultado_id);

    if($dados_usuarios['usuario']){
        header('Location: home.php');
    }else{
      header('Location: index.php?erro=1');
    }

  



    






?>