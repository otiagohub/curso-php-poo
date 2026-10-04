<?php

class NotificadorSMS implements Notificador
{

    use RegistraLog;

    public function enviar(string $mensagem): string
    {
        return "SMS: $mensagem";
    }
}