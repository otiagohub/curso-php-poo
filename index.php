<?php
use App\Pedidos\Pedido;
use App\Relatorios\Pedido as RelatorioPedido;
use App\Pedidos\StatusPedido;
use App\Notificacoes\NotificadorEmail;
use App\Saudacao;

require_once "vendor/autoload.php";

$notificadorEmail = new NotificadorEmail();

$pedido1 = new Pedido(1001, 'Geddy Lee', StatusPedido::Pendente);
$pedido2 = new Pedido(1002, 'Alex Lifeson', StatusPedido::Pendente);
$pedido3 = new Pedido(1003, "Neil Peart", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1004, 'Anika Nilles', StatusPedido::SaiuParaEntrega);

$pedido5 = new \App\Pedidos\Pedido(1005, 'John Rutsey', StatusPedido::AguardandoPagamento);

$pedido6 = new Pedido(1006, 'Jon Oliva', StatusPedido::Pendente);
$relatorioPedido = new RelatorioPedido();

$pedido2->setStatus(StatusPedido::EmPreparacao);

$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4, $pedido5, $pedido6];

$saudacao = new Saudacao();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual - Composer e Autoload</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Pedidos da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando Pagamento, Em preparação, Pago ou Saiu para entrea.</p>

            <p>Saudação: <?= $saudacao->cumprimentar() ?></p>
        </header>

        <div class="conteudos">

        <?php foreach($pedidos as $pedido): ?>
            <article class="card-conteudo">
                <h2>Pedido #<?= $pedido->getNumero() ?> </h2>
                <p>Cliente: <?= $pedido->getCliente() ?></p>
                <p>Status: 
                    <b class="destaque"> <?= $pedido->getStatus()->value ?> </b>
                </p>
                <?php  
                $mensagem = 'Seu pedido #'.$pedido->getNumero(). ' está com o status: '.$pedido->getStatus()->value;
                ?>
                <p><small><?= $notificadorEmail->enviar($mensagem) ?></small></p>
            </article>
        <?php endforeach; ?>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li><b>Composer</b>: gerenciador de dependências para PHP; aqui utilizamos apenas seu <b>autoload</b></li>
                <li>Configuração do autoload no <b>composer.json</b></li>
                <li><b>PSR-4</b>: relação de entre namespaces e diretórios para o autoload</li>
                <li>Mapeamento do namespace <b>App\</b> para a pasta <b>src/</b></li>
                <li>Geração do autoload com <b>composer dump-autoload</b></li>
                <li>Carregamento do autoload na index.php usando um único <b>require_once</b> para <b>vendor/autoload.php</b></li>
                <li>Criação da classe <b>Saudacao</b> para testar o autoload</li>
                <li><b>composer install</b>: instalação das dependências e geração dos arquivos de autoload.</li>
            </ul>
        </div>

    </div>
</body>

</html>