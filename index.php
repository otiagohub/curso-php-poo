<?php
// Importação da interface, da trait e das classes
require_once "src/Notificador.php";
require_once "src/RegistraLog.php";
require_once "src/NotificadorEmail.php";
require_once "src/NotificadorSMS.php";

$notificadorEmail = new NotificadorEmail();
$notificadorSMS =  new NotificadorSMS();

$notificadores = [$notificadorEmail];

$mensagens = [
    "Seu pedido foi confirmado!", // 0
    "Seu pedido saiu para entrega!", // 1
    "Seu pedido foi entregue!" // 2
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações da loja virtual - Recursos Estáticos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Notificações da loja virtual</h1>
            <p>Simulação de notificações sobre seu pedido por e-mail e SMS.</p>
        </header>

        <div class="conteudos">
        
        <?php foreach($mensagens as $etapa => $mensagem): ?>

            <?php foreach($notificadores as $notificador): ?>
            <article class="card-conteudo">
                <h2>Notificação: Etapa <?= $etapa + 1 ?> </h2>
                <p><?= $notificador->enviar($mensagem) ?></p>
                <p><small>
                    <i><?= $notificador->registrarLog($mensagem) ?></i>
                </small></p>
            </article>
            <?php endforeach; ?>

        <?php endforeach; ?>
        
        </div>

        <hr>

        <section class="card-conteudo resumo-envios">
            <h2>Resumo dos envios</h2>
            <p>E-mails enviados: <b><?= NotificadorEmail::getQuantidadeEnviada() ?></b> </p>
            <p>SMS enviados: <b><?= NotificadorSMS::getQuantidadeEnviada() ?></b> </p>
        </section>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Propriedades estáticas</li>
                <li>Métodos estáticos</li>
                <li>Acesso a recursos estáticos com <b>::</b></li>
                <li>Acesso aos recursos da própria classe com <b>self</b></li>
                <li>Diferença entre recursos do objeto e recursos da classe</li>
            </ul>
        </div>

    </div>
</body>

</html>
