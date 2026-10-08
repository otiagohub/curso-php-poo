<?php
namespace App\Notificacoes;

trait RegistraLog
{
    public function registrarLog(string $mensagem): string
    {
        return "Log registrado (simulação): $mensagem";
    }
}