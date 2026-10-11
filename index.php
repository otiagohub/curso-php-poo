<?php
require_once "vendor/autoload.php";

use App\Autenticacao\Autenticador;

$autenticador = new Autenticador();
$mensagem = '';
$classeMensagem = 'mensagem-sucesso';

try {
    $mensagem = $autenticador->login('admin@loja.com', '123456');
} catch (\Exception $erro) {
    $mensagem = $erro->getMessage();
    $classeMensagem = 'mensagem-erro';
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Login - Exceções</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Simulador de Login</h1>
            <p>Uma simulação simples para demonstrar o lançamento e o tratamento de exeções.</p>

        </header>

        <div class="conteudos">
        
            <article class="card-conteudo">
                <h2>Resultado da tentativa</h2>
                <p class="<?= $classeMensagem ?>">
                    <?= $mensagem ?>
                </p>
            </article>

        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Exceções e a classe <b>Exception</b></li>
                <li>Lançamento de uma exceção com <b>throw</b></li>
                <li>Tentativa de execução com <b>try</b></li>
                <li>Captura de uma exceção com <b>catch</b></li>
                <li>Obtenção da mensagem personalizada com <b>getMessage()</b></li>
            </ul>
        </div>

    </div>
</body>

</html>