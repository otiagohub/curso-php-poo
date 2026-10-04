<?php

class NotificadorEmail implements Notificador
{
    // A classe NotificadorEmail utiliza a trait RegistraLog para reutilizar o método registrarLog()
    use RegistraLog;

    public function enviar(string $mensagem): string 
    {
        return "E-mail: $mensagem";
    }
}