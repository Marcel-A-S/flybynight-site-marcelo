<?php

require_once "../src/produto_crud.php";
$produtos = buscarProdutos($conexao);

require_once "../src/_crud.php";
$lojas = buscarLojas($conexao);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos por loja - Fly By Night</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
    <?php
    $caminhoBase = '../';
    $secaoAtual = 'lojas_produtos';
    require '../componentes/cabecalho.php';
    ?>
    <main>
        <h2>Produtos por loja</h2>
        <p>Gerencie os vínculos e o estoque de cada produto nas lojas. A exclusão remove somente o vínculo.</p>
        <div class="barra-acoes"><a class="botao" href="inserir.php">+ Novo vínculo</a></div>
        <!-- Os registros serão carregados dinamicamente quando o back-end for implementado. -->
        <div class="area-tabela" tabindex="0">
            <table>
                <caption>Relação de Produtos por loja</caption>
                <thead>
                    <tr>
                        <th scope="col">Loja</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aqui serão geradas as linhas com os dados e as ações Editar e Excluir de cada registro. -->

                  <?php foreach($produtos as $produto): ?>
                      
                    <tr>
                        <td> <?= $produto['nome_produto'] ?> </td>
                        
                        
                        <td>
                            <a href="editar.php?id=<?= $produto['id'] ?>">Editar</a>
                            <a href="excluir.php?id=<?= $produto['id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                   <?php foreach($lojas as $loja): ?>
                    <td> <?=  $loja['nome_loja'] ?> </td>
 <?php endforeach; ?>






                </tbody>
            </table>
        </div>
    </main>
</body>

</html>