<?php
// A classe NotificadorSMS deve implementar o método enviar
class NotificadorSMS implements Notificador
{
    public function enviar(string $mensagem): string
    {
        return "SMS: $mensagem";
    }
}