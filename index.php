<?php 
require_once "src/Filme.php";

$filme1 = new Filme();

$filme1->setTitulo("De Volta para o Futuro");
$filme1->setGenero("Ficção Científica");
$filme1->setAno(1985);

$filme2 = new Filme();
$filme2->setTitulo("Toy Story");
$filme2->setGenero("Animação");
$filme2->setAno(1995);

$filme3 = new Filme();
$filme3->setTitulo("O Auto da Compadecida");
$filme3->setGenero("Comédia");
$filme3->setAno(2000);
$filme3->setAno(-100);

$filmes = [$filme1, $filme2, $filme3];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="filmes">
        <?php foreach($filmes as $filme): ?>
            <article class="card-filme">
                <span class="genero">
                    <?= $filme->getGenero() ?>
                </span>

                <h2> <?= $filme->getTitulo() ?> </h2>

                <p class="ano">Lançamento: <?= $filme->getAno() ?></p>

                <?php if($filme->ehClassico()): ?>
                    <span class="classico">Clássico</span>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Visibilidade: public, private e protected</li>
                <li>Encapsulamento</li>
                <li>Getters e Setters</li>
                <li>Validação no setter do ano</li>
            </ul>
        </div>

    </div>
</body>
</html>