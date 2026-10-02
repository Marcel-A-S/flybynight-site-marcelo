<?php

// src/loja_crud.php

require_once "conecta.php";

// buscar lojas
function buscarLojas(PDO $conexao): array
{

    // Montando um comando SQL para a consulta
    $sql = "SELECT * FROM lojas ORDER BY nome";

    // Execultar o comando e guardando o resultado da consulta
    $consulta = $conexao->query($sql);

    // Retornando o resultado como um array associativo
    return $consulta->fetchAll();
}

function inserirLojas(PDO $conexao, string $nome): void
{

    // Passo 1: definir os parâmetros nomeados
    $sql = "INSERT INTO lojas (nome) VALUES (:nome)";

    // Passo 2:preparar o comando para execução
    $consulta = $conexao->prepare($sql);

    // Passo 3: vincular o valor ao parâmetro nomeado
    $consulta->bindValue(":nome", $nome);

    // Passo 4: executar a consulta/comando no banco
    $consulta->execute();
}
