<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
		header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
	}

    require_once('models/Banco.php');

    $tweet = $_POST['texto_tweet'];
    $id_usuario = $_SESSION['id_usuario'];
    $nome_usuario = $_SESSION['usuario'];


    if($tweet != '' && $id_usuario != ''){
        $objeto = new Banco();
        $link = $objeto->conectando_banco();
    
        $sql = "INSERT INTO tweet(id_usuario, tweet) values('$id_usuario', '$tweet') ";
    
        mysqli_query($link, $sql);
    
    }
  


?>