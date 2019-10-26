
<?php


require_once('banco.class.php');

//consulta no banco
$sql = "SELECT * FROM usuarios";

//instanciado a nova classo banco
$objeto = new db();

//Feita a conexão do banco
$link = $objeto->conectando_banco();

//Trazendo o resultado da conexão do banco e da query
$resultado_id = mysqli_query($link, $sql);


if($resultado_id){

    $dados_usuario = array();

    while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
        $dados_usuario[] = $linha;
    }

    foreach($dados_usuario as $usuario){
        var_dump($usuario);
        echo '<br><br>';
    }
  
    
}else{
 
    echo 'Erro na execução da consulta,';
}












?>