<?php
// ../src/loja_produto_crud.php
require_once "conecta.php";

// Buscar produtos
function buscarLojasProdutos(PDO $conexao): array
{
    $sql = "SELECT
                produtos.nome AS produto,
                lojas.nome AS loja,
                lojas_produtos.estoque
            FROM lojas_produtos
            INNER JOIN produtos
                ON lojas_produtos.produto_id = produtos.id
            INNER JOIN lojas
                ON lojas_produtos.loja_id = lojas.id";

    $consulta = $conexao->query($sql);

    return $consulta->fetchAll();
}

// Inserir Produtos

function inserirLojaProduto(
    PDO $conexao,
    string $loja,
    string $produto,
    int $estoque,
    


): void {
    $sql = "INSERT INTO lojas_produtos(loja_id, produto_id, estoque)    
            VALUES(:loja_id, :produto_id, :estoque)";


    $consulta = $conexao->prepare($sql);
    
    $consulta->bindValue(':loja_id', $loja);
            $consulta->bindValue(':produto_id', $produto);
            $consulta->bindValue(':estoque', $estoque);
 
            $consulta->execute();
}
