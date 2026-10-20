<?php

// PARA FAZER: Carregue manualmente as três classes, respeitando suas dependências.
// PARA FAZER: Crie pelo menos quatro funcionários, misturando CLT e PJ.
// PARA FAZER: Reúna todos os objetos em um único array $funcionarios.

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Funcionários</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main class="container">
        <header>
            <p class="destaque">Exercício prático</p>
            <h1>Sistema de Funcionários</h1>
            <p>Funcionários diferentes, uma mesma forma de calcular o salário.</p>
        </header>

        <div class="funcionarios">
            <?php // PARA FAZER: Inicie aqui o único foreach que repetirá o card para todos os funcionários. ?>
            <article class="card-funcionario">
                <h2><?php // PARA FAZER: Exiba o nome usando o método de acesso. ?></h2>
                <p class="rotulo">Salário calculado</p>
                <p class="salario"><?php // PARA FAZER: Exiba o salário calculado pelo objeto, formatado em reais. ?></p>
            </article>
            <?php // PARA FAZER: Encerre aqui a repetição. ?>
        </div>

        <hr>

        <section class="assuntos-estudados">
            <h2>Conceitos praticados</h2>
            <ul>
                <li>Classes, objetos, propriedades e métodos</li>
                <li>Visibilidade e encapsulamento</li>
                <li>Construtor e herança</li>
                <li>Classes abstratas e métodos abstratos</li>
                <li>Polimorfismo no cálculo do salário</li>
            </ul>
        </section>
    </main>
</body>
</html>
