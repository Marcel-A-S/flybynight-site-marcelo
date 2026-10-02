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





