<?php 
require_once "src/Conteudo.php";
require_once "src/Filme.php";
require_once "src/Serie.php";

$filme1 = new Filme("De Volta para o Futuro", "Ficção Científica", 1985, 116);
$filme2 = new Filme("Toy Story", "Animação", 1995, 169);

$serie1 = new Serie("Friends", "Comédia", 1994, 10);
$serie2 = new Serie("Supernatural", "Fantasia", 2005, 15);

$conteudos = [$filme1, $filme2, $serie1, $serie2];

/* Com a classe Conteudo definida como abstrata, a linha abaixo já não funcionará
mais pois não é possível criar objetos diretamente à partir de classes abstratas. */
// $conteudo = new Conteudo("Senhor dos Anéis: As Duas Torres", "Fantasia", 2002);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes e Séries - Classes Abstratas e Polimorfismo</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes e séries</h1>
            <p>Filmes e séries para descobrir, rever e se divertir.</p>
        </header>

        <div class="conteudos">
        <?php foreach($conteudos as $conteudo): ?>
            <article class="card-conteudo">
                <span class="genero">
                    <?= $conteudo->getGenero() ?>
                </span>

                <h2> <?= $conteudo->getTitulo() ?> </h2>

                <p class="ano">Lançamento: <?= $conteudo->getAno() ?></p>

                <!-- Polimorfismo: a mesma chamada de método, 
                 usando implementações diferentes (Filme e Serie) -->
                <p> <?= $conteudo->getDescricao() ?> </p>

                <?php if($conteudo->ehClassico()): ?>
                    <span class="classico">Clássico</span>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
        </div>

        <hr>

        

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Classe abstrata: <b>Conteudo</b></li>
                <li>Método abstrato: <b>getDescricao()</b></li>
                <li>Impossibilidade de instanciar diretamente uma classe abstrata</li>
                <li>Implementação do método abstrato pelas classes filhas Filme e Serie</li>
                <li>Polimorfismo: a mesma chamada a <b>getDescricao()</b> utliza a implementação de cada classe.</li>
                <li>Tratamento uniforme de objetos Filme e Serie em um único array e foreach.</li>
            </ul>
        </div>

    </div>
</body>
</html>
