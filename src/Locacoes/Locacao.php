<?php
namespace App\Locacoes;

use App\Equipamentos\Equipamento;

class Locacao
{
    private string $cliente;
    private Equipamento $equipamento;
    private int $quantidadeDias;
    private StatusLocacao $status;

    public function __construct(
        string $cliente, Equipamento $equipamento, int $quantidadeDias)
    {
        if(!$equipamento->estaDisponivel()){
            throw new \Exception(
                'O equipamento '.$equipamento->getNome(). ' está indisponível para locação'
            );
        }

        $this->cliente = $cliente;
        $this->equipamento = $equipamento;
        $this->quantidadeDias = $quantidadeDias;
        $this->status = StatusLocacao::Ativa;
        $this->equipamento->marcarComoIndisponivel();
    }

    public function getCliente(): string
    {
        return $this->cliente;
    }

    public function getEquipamento(): Equipamento
    {
        return $this->equipamento;
    }

    public function getQuantidadeDias(): int
    {
        return $this->quantidadeDias;
    }

    public function getStatus(): StatusLocacao
    {
        return $this->status;
    }

    public function calcularValorTotal(): float
    {
        return $this->equipamento->getValorDiaria() * $this->quantidadeDias;
    }

    public function finalizar(): void
    {
        if($this->status === StatusLocacao::Ativa){
            $this->status = StatusLocacao::Finalizada;
            $this->equipamento->disponibilizar();
        }
    }

}