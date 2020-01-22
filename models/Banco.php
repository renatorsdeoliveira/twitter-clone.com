<?php 

    class Banco {

        //Dados do banco
        private $host = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $database = "twitter_clone";

        public function conectando_banco(){

            //conexão feita
            $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            //colocando o charset de comunicação entre a aplicação e  o  banco
            mysqli_set_charset($conexao, "UTF8");


            //Ferificação de está dando erro na conexão
            if(mysqli_connect_errno()){
                echo "erro".mysqli_connect_error();
            }

            return  $conexao;

        }

    }

?>