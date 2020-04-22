<?php
    require_once('./controller/produtoController.php');

    $obj = new ProdutoController();
    $obj->listarProduto();
?>