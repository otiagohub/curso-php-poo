<?php
// Importamos a Enumeração antes da classe Pedido que a utiliza
require_once "src/StatusPedido.php";
require_once "src/Pedido.php";

require_once "src/Notificador.php";
require_once "src/RegistraLog.php";
require_once "src/NotificadorEmail.php";

$notificadorEmail = new NotificadorEmail();

$pedido1 = new Pedido(1001, 'Geddy Lee', StatusPedido::Pendente);
$pedido2 = new Pedido(1002, 'Alex Lifeson', StatusPedido::Pendente);
$pedido3 = new Pedido(1003, "Neil Peart", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1004, 'Anika Nilles', StatusPedido::SaiuParaEntrega);

$pedido2->setStatus(StatusPedido::EmPreparacao);

$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual - Enumerações</title>
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
                <li>Enumerações com um conjunto definido de casos usando <b>case</b></li>
                <li>Casos associados a valores do tipo <b>string</b></li>
                <li>Acesso a um caso com <b>StatusPedido::AguardandoPagamento</b></li>
                <li>Enumeração como tipo de propriedade, parâmetro e retorno</li>
                <li>Acesso ao texto do caso com <b>->value</b></li>
            </ul>
        </div>

    </div>
</body>

</html>
