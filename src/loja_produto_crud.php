<?php
// ../src/loja_produto_crud.php
require_once "conecta.php";

// Buscar produtos
function buscarLojasProdutos(PDO $conexao): array
{
    $sql = "SELECT *
            FROM lojas_produtos
            JOIN lojas
                ON lojas.id = lojas_produtos.loja_id
            JOIN produtos
                ON produtos.id = lojas_produtos.produto_id
            ORDER BY produtos.nome";

    $consulta = $conexao->query($sql);

    return $consulta->fetchAll();
}

// Inserir Produtos

function inserirLojaProduto(
    PDO $conexao,
    string $loja,
    string $produto,
    int $estoque,
    int $acoes,
    

): void {
    $sql = "INSERT INTO lojas_produtos(loja_id, produto_id, estoque)    
            VALUES(:loja_id, :produto_id, :estoque)";
    

   $consulta = $conexao->prepare($sql);
}
