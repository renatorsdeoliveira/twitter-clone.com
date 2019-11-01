<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
		header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
	}

    require_once('models/banco.class.php');

    $id_usuario = $_SESSION['id_usuario'];
    $seguir_id_usuario = $_POST['seguir_id_usuario'];


    if($id_usuario != '' && $seguir_id_usuario != ''){
        $objeto = new db();
        $link = $objeto->conectando_banco();
    
        $sql = "INSERT INTO usuarios_seguidores (id_usuario, seguindo_id_usuario) VALUES ($id_usuario, $seguir_id_usuario)";

        mysqli_query($link, $sql);
    
    }


?>