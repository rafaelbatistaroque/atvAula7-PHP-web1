<?php
   function conexaoBD(){
            $server = 'localhost';
            $user = 'root';
            $pwd = '';
            $mydb = 'vendas';
            $this->conexao = new mysqli($server, $user, $pwd, $mydb);

            if($this->conexao->connect_error){
                die('Conexão Falhou: '.$conexao->connect_error);
            }
        }
?>