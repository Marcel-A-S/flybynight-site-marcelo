<?php
// produtos/listar.php
require_once "../src/produto_crud.php";

$produtos = buscarProdutos($conexao);

echo "<pre>";
var_dump($produtos);
echo "<pre>";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>