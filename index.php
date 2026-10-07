<?php
// Importação da interface (primeiro) e das classes
require_once "src/Notificador.php";
require_once "src/NotificadorEmail.php";
require_once "src/NotificadorSMS.php";

$notificadorEmail = new NotificadorEmail();
$notificadorSMS =  new NotificadorSMS();

// Os dois objetos implementam o mesmo contrato: Notificador
$notificadores = [$notificadorEmail, $notificadorSMS];

$mensagem = "Seu pedido foi confirmado!";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações da loja virtual - Interfaces</title>
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

        <?php foreach($notificadores as $notificador): ?>
            <article class="card-conteudo">
                <h2> Notificação </h2>

            <!-- A mesma chamada usa a implementação de cada notificador -->
                <p><?= $notificador->enviar($mensagem) ?></p>

            </article>
        <?php endforeach; ?>
        </div>

        <hr>


        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Interface <b>Notificador</b> como contrato de comportamento</li>
                <li>Definição do método <b>enviar(string $mensagem): string</b> na interface</li>
                <li>Implementação da interface com <b>implements</b> em <b>NotificadorEmail</b> e <b>NotificadorSMS</b></li>
                <li>Implementação do método <b>enviar()</b> em cada classe</li>
                <li>Polimorfismo: a mesma chamada a <b>enviar()</b> utiliza a implementação de cada classe</li>
            </ul>
        </div>

    </div>
</body>

</html>
