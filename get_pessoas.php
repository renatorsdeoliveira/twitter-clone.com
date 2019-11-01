<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
    }

    require_once('models/banco.class.php');

    $nome_pessoa = $_POST['nome_pessoa'];
    $id_usuario = $_SESSION['id_usuario'];

    $objeto = new db();
    $link = $objeto->conectando_banco();

    $sql = "SELECT * FROM usuarios WHERE usuario like'%$nome_pessoa%' AND id <> $id_usuario";


    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        while($registros = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registros['usuario'].'</strong> <small> - '.$registros['email'].'</small>';
                echo '<p class="list-group-item-text pull-right">';
                echo '<button type="button" class="btn btn-default btn_seguir" data-id_usuario="'.$registros['id'].'"> Seguir </button>';
                // echo '<button type="button" class="btn btn-primary btn_deixar_seguir data-id_usuario="'.$registros['id'].'""> Deixar de seguir </button>';
                echo '</p>';
                echo '<div class="clearfix"></div>';
            echo '</a>';
  

        }
    }
    else{
        echo 'Erro de usuários como na tentativa de acessar o banco de dados';
    }

?>