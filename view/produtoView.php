<?php
$produtos = $_REQUEST['produtos'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Produtos</title>
</head>
<body>
    <div class="container text-center">
        <form class='form-inline' method='post' action='./controller/editarController.php' id='form' name='form'>
            <input type='hidden' id='codProd' name='codProd'>
            <div class="form-group my-4">
                <input class='form-control m-1' type='text' id='descricao' name='descricao' placeholder='Descrição Produto' required>
                <input class='form-control m-1' type='text' id='unidade' name='unidade' placeholder='CX | KG | UN...' required>
                <input class='form-control m-1' type='text' id='valor' name='valor' placeholder='Valor do Produto' required>
            </div>
            <button class='btn btn-success mr-1' type='submit' id='btsubmit' name='btsubmit' value='criar'>Criar</button>
            <button	class='btn btn-secondary mr-1' onclick='limpar()' type='reset' >Limpar</button>
        </form>
        <table class='table table-responsive-md table-hover'>
            <thead>
                <tr>
                    <th scope='col'>COD PRODUTO</th>
                    <th scope='col'>DESCRIÇÃO</th>
                    <th scope='col'>UNIDADE</th>
                    <th scope='col'>VALOR</th>
                    <th scope='col'>#</th>
                </tr>
            </thead>
            <?php foreach($produtos as $produto): 
                $idProduto = $produto["CODPROD"];
                $descricao = $produto["DESCRICAO"];
                $unidade = $produto["UNIDADE"];
                $valor = $produto["VALOR_UN"];
            ?>
            <tbody>
                <tr>
                    <td><?php echo $idProduto?></td>
                    <td id='descricaoItemLista_<?php echo $idProduto?>'><?php echo $descricao ?></td>
                    <td id='unidadeItemLista_<?php echo $idProduto?>'><?php echo $unidade?></td>
                    <td id='valorItemLista_<?php echo $idProduto?>'><?php echo $valor?></td>
                    <td>
                        <button class='btn btn-primary' onclick='editar(<?php echo $produto["CODPROD"];?>)'>Editar</button>
                        <button id='btnExcluir_<?php echo $idProduto?>' class='btn btn-danger' onclick='excluir(<?php echo $produto["CODPROD"];?>)'>Excluir</button>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="./script/script.js"></script>
</body>
</html>