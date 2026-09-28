<?php
//src/fornecedor_crud.php

//Todas as funções criadas neste arquivo precisarão do script de conexão
require_once "conecta.php";

// Usanda em fornecedores/lista.php
function buscarFornecedores(PDO $conexao): array {
    // MOntando um comando SQL para a consulta
    $sql = "SELECT * FROM fornecedores ORDER BY nome";

    // Execultar o comando e guardando o resultado da consulta
     $consulta = $conexao->query($sql);

     // Retornando o resultado como um array associativo
     return $consulta->fetchAll();
}