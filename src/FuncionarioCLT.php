<?php

class FuncionarioCLT extends Funcionario 
{
    private float $salarioBase;
    private float $bonus;

    public function __construct(string $nome, float $salarioBase, float $bonus)
    {
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->bonus = $bonus;
    }

    public function calcularSalario(): float
    {
        return $this->salarioBase + $this->bonus;
    }
}



