<?php
// A Interface define o método que cada notificador (classe) DEVE implementar. Contrato, não implementação.
interface Notificador 
{
    public function enviar(string $mensagem): string;
}