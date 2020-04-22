<?php
    require_once('../model/Produto.php');

    class EditarController{
        private $produto;

        public function __construct(){
            $this->produto = new Produto();
        }
        public function atualizar($codProd, $nomeProd, $unidade, $valor, $submit){
            $this->produto->setDescricao($nomeProd);
            $this->produto->setUnidade($unidade);
            $this->produto->setValorUn($valor);
            $this->produto->setCodProd($codProd);

            switch ($submit) {
                case 'editar':
                    $this->produto->atualizarProduto();
                break;
                case 'criar':
                    $this->produto->criarProduto();
                break;
                case 'remover':
                    $this->produto->deletarProduto();
                    break;
            }
            header('Location: ../index.php');
            exit();       
        }
    }

    $editar = new EditarController();
    if(isset($_POST['btsubmit'])){
        $editar->atualizar(
            $_POST['codProd'],
            $_POST['descricao'],
            $_POST['unidade'],
            $_POST['valor'],
            $_POST['btsubmit']);
        }
?>