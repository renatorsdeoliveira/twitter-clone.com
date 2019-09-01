<?php


    class db {

        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $database = 'twiter_clone';

        public function conecta_mysql(){

            $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            mysqli_set_charset( $conexao, 'UTF8');

            if(mysqli_connect_errno()){
                echo "erro".mysqli_connect_error();
            }

            return  $conexao;

        }

    


    }

?>