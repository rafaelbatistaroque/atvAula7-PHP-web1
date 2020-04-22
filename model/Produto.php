<?php
    class Produto{
        private $codProd;
        private $descricao;
        private $unidade;
        private $valorUn;
        private $conexao;

        function __construct(){
            $this->conexaoBD();
        }

        public function getCodProd(){return $this->codProd;}
        public function setCodProd($codProd){$this->codProd = $codProd;}
        public function getDescricao(){return $this->descricao;}
        public function setDescricao($descricao){$this->descricao = $descricao;}
        public function getUnidade(){return $this->unidade;}
        public function setUnidade($unidade){$this->unidade = $unidade;}
        public function getValorUn(){return $this->valorUn;}
        public function setValorUn($valorUn){$this->valorUn = $valorUn;}
       
        public function criarProduto(){
            $sql = 'INSERT INTO produto(DESCRICAO, UNIDADE, VALOR_UN)
                    VALUES("'.$this->getDescricao().'","'.$this->getUnidade().'","'.$this->getValorUn().'")';
            
            $this->conexao->query($sql);
        }
        
        public function atualizarProduto(){
            $sql = 'UPDATE produto
                    SET DESCRICAO ="'.$this->getDescricao().'", UNIDADE = "'.$this->getUnidade().'", VALOR_UN = "'.$this->getValorUn().'"
                    WHERE CODPROD = '.$this->getCodProd();
                    
            $this->conexao->query($sql);
        }
        public function deletarProduto(){
            $sql = 'DELETE FROM produto WHERE CODPROD = '.$this->getCodProd();

            $this->conexao->query($sql);
        }
        
        public function obterProduto(){
            $produtos = array();
            
            $sql = 'SELECT * FROM produto';
            
            $resultado = $this->conexao->query($sql);

            if($resultado != null){
                while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
                    if(!empty($row)){
                        array_push($produtos, $row);
                    }
                }
            }
            return $produtos;
        }
        
        private function conexaoBD(){
            $server = 'localhost';
            $user = 'root';
            $pwd = '';
            $mydb = 'vendas';
            $this->conexao = new mysqli($server, $user, $pwd, $mydb);

            if($this->conexao->connect_error){
                die('Conexão Falhou: '.$conexao->connect_error);
            }
        }
    }
?>