<?php
require_once "vendor/autoload.php";

use App\Produtos\Produto;
use App\Produtos\ProdutoDigital;
use App\Enderecos\Endereco;

$produto = new Produto('Monitor', 1999.90);
$produtoDigital = new ProdutoDigital('E-book de PHP', 59.90, 2.5);
$endereco = new Endereco('Rua das Flores', '123X', 'São Paulo', 'SP');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual - Outros recursos de POO</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Outros recursos de POO</h1>
            <p>Exemplos dos recursos estudados neste assunto</p>
        </header>

        <div class="conteudos">
        
            <article class="card-conteudo">
                <p class="tipo">Produto físico</p>
                <h2><?= $produto->getNome() ?></h2>
                <p class="preco"><?= $produto->getPrecoFormatado() ?></p>
            </article>

            <article class="card-conteudo">
                <p class="tipo">Produto digital</p>
                <h2><?= $produtoDigital->getNome() ?></h2>
                <p class="preco"><?= $produtoDigital->getPrecoFormatado() ?></p>
                <p class="tamanho">
                    Tamanho: <?= $produtoDigital->getTamanhoArquivo() ?>MB
                </p>
            </article>

        </div>

        <div class="card-conteudo endereco">
            <h2>Endereço de entrega</h2>
            <p>
                <?= $endereco->logradouro ?>, <?= $endereco->numero ?> <br>
                <?= $endereco->cidade ?> - <?= $endereco->estado ?>
            </p>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Constantes de classe</li>
                <li>Final em métodos</li>
                <li>Final em classes</li>
                <li>Promoção de propriedades no construtor</li>
                <li>Propriedades somente leitura (readonly)</li>
                <li>Classes somente leitura (readonly)</li>
                <li>Property Hooks (get/set)</li>
            </ul>
        </div>

    </div>
</body>

</html>