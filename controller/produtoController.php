<?php
    require_once('./model/Produto.php');

    class ProdutoController{
        public function listarProduto(){
            $produto = new Produto();
            $produtos = $produto->obterProduto();

            $_REQUEST['produtos'] = $produtos;
            require_once('./view/produtoView.php');
        }
    }
?>