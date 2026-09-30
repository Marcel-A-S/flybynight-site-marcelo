<?php
// src/conecta.php

// Parâmetros de conexão ao servidor MySQL
$servidor = "localhost";
$banco = "flybynight_completo";
$usuario = "root";
$senha = "senacpenha";

/* Usamos o try /catch para realizar as operaçãoes de conexão ao servidor */
try {
    // criando um objeto a partir da classe PDO definindo uma string de conexão.
    // PDO é uma classe de recursos para manipulação de bancos de dados
    $conexao = new PDO(
     "mysql:host=$servidor;dbname=$banco;charset=utf8mb4",
      $usuario,
      $senha  
    );

    // Garantindo que erros/exeções serão lançados/exibindas em qualquer falhe na conexão
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Garantindo que resultados de operação SELECT sejam retornados como array associativo

$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,  PDO::FETCH_ASSOC);

} catch (PDOException $erro) {
    //"Logar/registrar" o erro e exibir no terminal
    error_log($erro->getMessage());
    
    // NA interface pública, exibimos uma mensagem genérica para o usúario
    exit("Não foi possível conectar ao banco");

}

// Testeprovisório:
//var_dump($conexao);