<?php

class FuncionarioPJ extends Funcionario
{
    private float $horasTrabalhadas;
    private float $valorHora;

    public function __construct(
        string $nome, 
        float $horasTrabalhadas, 
        float $valorHora)
    {
        parent::__construct($nome);
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->valorHora = $valorHora;
    }

    public function calcularSalario(): float
    {
        return $this->horasTrabalhadas * $this->valorHora;        
    }
}



