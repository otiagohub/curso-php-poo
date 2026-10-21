<?php

namespace App\Equipamentos;

class Equipamento
{
    private string $nome;
    private float $valorDiaria;
    private bool $disponivel;

    public function __construct(string $nome, float $valorDiaria)
    {
        $this->nome = $nome;
        $this->disponivel = true;
        $this->valorDiaria = $valorDiaria;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getValorDiaria(): float
    {
        return $this->valorDiaria;
    }

    public function estaDisponivel(): bool
    {
        return $this->disponivel;
    }

    public function marcarComoIndisponivel(): void
    {
        $this->disponivel = false;
    }

    public function disponibilizar():void
    {
        $this->disponivel = true;
    }

}