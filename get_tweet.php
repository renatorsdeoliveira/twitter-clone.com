<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
    }

    require_once('models/banco.class.php');

    $id_usuario = $_SESSION['id_usuario'];

    $objeto = new db();
    $link = $objeto->conectando_banco();

    $sql = "SELECT * FROM tweet WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC";

    $resultado_tweets = mysqli_query($link, $sql);

    if($resultado_tweets){
        while($registros = mysqli_fetch_array($resultado_tweets, MYSQLI_ASSOC)){
            var_dump($registros);
            echo '<br /><br />';

        }
    }

?>