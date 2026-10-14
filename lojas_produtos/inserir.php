<?php

$lojas_produtos = buscarLojasProdutos($conexao);
 

// Detectar o acionamento do formulário de inscrição
if($_SERVER["REQUEST_METHOD"] === "POST"){

// Capturar os dados do formulário
    $loja = $_POST['loja'];
    $produto = $_POST['produto'];
    $estoque = $_POST['estoque'];

 //Chamar a função de inserir e passar os dados para ela
inserirLojaProduto($conexao, $loja, $produto, $estoque);

 // Redirecionar para a página que mostra os produtos
header("Location: loja_produto_crud.php" );
exit;

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produto a uma loja - Fly By Night</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
    <?php
    $caminhoBase = '../';
    $secaoAtual = 'lojas_produtos';
    require '../componentes/cabecalho.php';
    ?>
    <main>
        <h2>Adicionar produto a uma loja</h2>
        <!-- Modelo visual: os campos não são enviados nem persistidos. -->
        <form action="" method="post">

            <div>
                <label for="loja">Loja:</label>
                <select name="loja" id="loja" required>
                    <option value="">Selecione</option>
                    <!-- As opções serão preenchidas com os registros do banco de dados. -->
                </select>
            </div>

            <div>
                <label for="produto">Produto:</label>
                <select name="produto" id="produto" required>
                    <option value="">Selecione</option>

<?php foreach ($lojas_produtos as $produto): ?>
<option <?=  $lojas_produtos['$loja_id'] ?> value ></option>

<?php endforeach; ?>


                    <!-- As opções serão preenchidas com os registros do banco de dados. -->
                </select>
            </div>
            <div>
                <label for="estoque">Estoque:</label>
                <input type="number" name="estoque" id="estoque" min="0" step="1" required>
            </div>
            <button type="submit">Salvar</button>
        </form>
        <a href="listar.php">← Voltar</a>
    </main>
</body>

</html>