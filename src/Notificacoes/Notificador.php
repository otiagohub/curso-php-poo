<?php
namespace App\Notificacoes;

interface Notificador 
{
    public function enviar(string $mensagem): string;
}