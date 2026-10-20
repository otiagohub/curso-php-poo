<?php

require_once "src/Funcionario.php";
require_once "src/FuncionarioCLT.php";
require_once "src/FuncionarioPJ.php";

$funcionario1 = new FuncionarioCLT("Geddy Lee", 3000, 500);
$funcionario2 = new FuncionarioPJ("Alex Lifeson", 160, 50);
$funcionario3 = new FuncionarioCLT("Neil Peart", 4200.65, 300);
$funcionario4 = new FuncionarioPJ("Anika Nilles", 120, 65.78);

$funcionarios = [$funcionario1, $funcionario2, $funcionario3, $funcionario4];
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
            <?php foreach($funcionarios as $funcionario): ?>
            <article class="card-funcionario">
                <h2><?= $funcionario->getNome()  ?></h2>
                <p class="rotulo">Salário calculado</p>
        <p class="salario">
           R$ <?= number_format($funcionario->calcularSalario(), 2, ",", ".") ?>
        </p>
            </article>
            <?php endforeach; ?>
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
