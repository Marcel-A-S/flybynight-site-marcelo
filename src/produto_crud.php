<?php
// src/produto_crud.php

require_once "conecta.php";

function buscarProdutos(PDO $conexao): array
{
$sql ="";
$consulta = $conexao->query($sql);
return $consulta->fetchAll();

}