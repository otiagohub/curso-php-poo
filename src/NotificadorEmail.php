<?php
// A classe NotificadorEmail implementa a interface Notificador, garantindo que o método enviar() seja definido.
class NotificadorEmail implements Notificador
{
    public function enviar(string $mensagem): string 
    {
        return "E-mail: $mensagem";
    }
}