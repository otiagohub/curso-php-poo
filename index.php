<?php
// Importação da interface, da trait e das classes
require_once "src/Notificador.php";
require_once "src/RegistraLog.php";
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
    <title>Notificações da loja virtual - Traits</title>
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

                <p>
                    <small>
                        <mark>
                            <?= $notificador->registrarLog($mensagem) ?>
                        </mark>
                    </small>
                </p>

            </article>
        <?php endforeach; ?>
        </div>

        <hr>


        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Trait <b>RegistraLog</b> para reutilização de comportamento</li>
                <li>Uso de traits nas classes com <b>use</b></li>
                <li>Reutilização do método <b>registrarLog()</b> sem duplicar sua implementação</li>
                <li>Diferença entre o contrato da <b>interface</b> e a implementação fornecida pela <b>trait</b></li>
            </ul>
        </div>

    </div>
</body>

</html>
