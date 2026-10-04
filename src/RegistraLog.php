<?php
// A Trait fornece uma implementação que pode ser reutilizada pelas classes
trait RegistraLog
{
    public function registrarLog(string $mensagem): string
    {
        return "Log registrado (simulação): $mensagem";
    }
}