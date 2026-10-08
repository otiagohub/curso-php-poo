<?php
use App\Pedidos\Pedido;
use App\Relatorios\Pedido as RelatorioPedido;
use App\Pedidos\StatusPedido;
use App\Notificacoes\NotificadorEmail;

require_once "src/Pedidos/StatusPedido.php";
require_once "src/Pedidos/Pedido.php";
require_once "src/Relatorios/Pedido.php";

require_once "src/Notificacoes/Notificador.php";
require_once "src/Notificacoes/RegistraLog.php";
require_once "src/Notificacoes/NotificadorEmail.php";

$notificadorEmail = new NotificadorEmail();

$pedido1 = new Pedido(1001, 'Geddy Lee', StatusPedido::Pendente);
$pedido2 = new Pedido(1002, 'Alex Lifeson', StatusPedido::Pendente);
$pedido3 = new Pedido(1003, "Neil Peart", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1004, 'Anika Nilles', StatusPedido::SaiuParaEntrega);

// Obs: o "nome completo" de Pedido é \App\Pedidos\Pedido.
// Se não houvesse a importação (ou seja, utilizando use), seria necessário usar o nome completo. Exemplo
$pedido5 = new \App\Pedidos\Pedido(1005, 'John Rutsey', StatusPedido::AguardandoPagamento);

$pedido6 = new Pedido(1006, 'Jon Oliva', StatusPedido::Pendente);
$relatorioPedido = new RelatorioPedido();

// echo "<pre>";
// var_dump($pedido6, $relatorioPedido);
// echo "</pre>";

$pedido2->setStatus(StatusPedido::EmPreparacao);

$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4, $pedido5, $pedido6];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual - Namespaces</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Pedidos da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando Pagamento, Em preparação, Pago ou Saiu para entrea.</p>
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
                <li>Reorganização dos arquivos em pastas dentro de <b>src</b></li>
                <li>Declaração do espaço de nomes com <b>namespace</b></li>
                <li>Nome completo de um tipo: <b>App\Pedidos\Pedido</b></li>
                <li>Importação de nomes com <b>use</b> para utilizar nomes simples</li>
                <li>Criação de apelidos com <b>use... as</b></li>
                <li><b>use</b> importa nomes; <b>require_once</b> carrega arquivos</li>
            </ul>
        </div>

    </div>
</body>

</html>