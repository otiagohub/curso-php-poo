<?php
namespace App\Notificacoes;

class NotificadorEmail implements Notificador
{
    use RegistraLog;

    // Contador de envios
    private static int $quantidadeEnviada = 0;

    public function enviar(string $mensagem): string 
    {
        self::$quantidadeEnviada++;
        return "E-mail: $mensagem";
    }

    public static function getQuantidadeEnviada(): int
    {
        return self::$quantidadeEnviada;
    }
}