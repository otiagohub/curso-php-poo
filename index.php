<?php

use App\Equipamentos\Equipamento;
use App\Locacoes\Locacao;

require_once "vendor/autoload.php";

$notebook = new Equipamento('Notebook Lenovo', 120);
$projetor = new Equipamento("Projetor Epson", 85.50);
$camera = new Equipamento("Câmera Canon", 95);

$equipamentos = [$notebook, $projetor, $camera];

$locacao1 = new Locacao('Neil Peart', $notebook, 3);
$locacao2 = new Locacao('Anika Nilles', $projetor, 2);

$locacoes = [$locacao1, $locacao2];

$mensagemErro = "";

try {
    $locacaoInvalida = new Locacao("Geddy Lee", $projetor, 5);
} catch(\Exception $erro){
    $mensagemErro = $erro->getMessage();
}

// Simulando o término de locação
$locacao1->finalizar();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Equipamentos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main class="container">
        <header>
            <p class="destaque">Exercício prático</p>
            <h1>Locadora de Equipamentos</h1>
            <p>Locações, disponibilidade e devoluções em uma pequena locadora.</p>
        </header>

        <section>
            <h2>Equipamentos</h2>

            <div class="lista-cards">
<?php foreach($equipamentos as $equipamento): ?>
                <article class="card">
                    <h3> <?= $equipamento->getNome() ?> </h3>
                    <p>Diária: 
                        R$ <?= number_format($equipamento->getValorDiaria(), 2, ",", ".") ?> 
                    </p>
                    <p class="status <?= $equipamento->estaDisponivel() ? 'status-disponivel' : 'status-indisponivel' ?>">
                        <?= $equipamento->estaDisponivel() ? 'Disponível' : 'Indisponível' ?>
                    </p>
                </article>
<?php endforeach; ?>
            </div>
        </section>

        <section>
            <h2>Locações</h2>

            <div class="lista-cards">
        <?php foreach($locacoes as $locacao): ?>
                <article class="card">
                    <h3> <?= $locacao->getCliente() ?> </h3>
                    <p>Equipamento: <b><?= $locacao->getEquipamento()->getNome() ?></b> </p>
                    <p>Quantidade de dias: <b><?= $locacao->getQuantidadeDias() ?></b></p>
                    <p>Valor total: 
                        <b>R$ <?= number_format($locacao->calcularValorTotal(), 2, ",", ".") ?></b>
                    </p>
                    <p>Status: <b><?= $locacao->getStatus()->value ?></b></p>
                </article>
        <?php endforeach; ?>
            </div>
        </section>

        <?php if($mensagemErro !== ''): ?>
        <section class="mensagem">
            <h2>Tentativa de locação</h2>
            <p><?= $mensagemErro ?></p>
        </section>
        <?php endif; ?>

        <section class="assuntos-estudados">
            <h2>Conceitos praticados</h2>
            <ul>
                <li>Encapsulamento e relacionamento entre objetos</li>
                <li>Enumerações</li>
                <li>Namespaces e autoload com Composer</li>
                <li>Exceções com try/catch</li>
            </ul>
        </section>
    </main>
</body>
</html>
