<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
		header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
	}

    require_once('models/Banco.php');

    $id_usuario = $_SESSION['id_usuario'];
    $deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];


    if($id_usuario != '' && $deixar_seguir_id_usuario != ''){
        $objeto = new Banco();
        $link = $objeto->conectando_banco();
    
        $sql = "DELETE FROM usuarios_seguidores WHERE id_usuario = $id_usuario AND seguindo_id_usuario = $deixar_seguir_id_usuario";

       mysqli_query($link, $sql);
    
    }


?>