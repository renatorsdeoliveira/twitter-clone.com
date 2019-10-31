<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
    }

    require_once('models/banco.class.php');

    $id_usuario = $_SESSION['id_usuario'];

    $objeto = new db();
    $link = $objeto->conectando_banco();

    $sql  = "SELECT DATE_FORMAT(t.data_inclusao, '%d %b %Y %T') as data_inclusao_formatada, t.tweet, u.usuario FROM tweet as t ";
    $sql .= "JOIN usuarios as u on (t.id_usuario = u.id)";
    $sql .= " WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC";

    $resultado_tweets = mysqli_query($link, $sql);

    if($resultado_tweets){
        while($registros = mysqli_fetch_array($resultado_tweets, MYSQLI_ASSOC)){
            echo '<a href="#" class="list-group-item">';
            echo '<h4 class="list-group-item-heading">'.$registros['usuario'].'<small> - '.$registros['data_inclusao_formatada'].'</small></h4>';
            echo '<p class="list-group-item-text">'.$registros['tweet'].'</p>';
            echo '</a>';
  

        }
    }
    else{
        echo 'Erro como na tentativa de acessar o banco de dados';
    }

?>