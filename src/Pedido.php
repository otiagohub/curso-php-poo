<?php
class Pedido
{
    private int $numero;
    private string $cliente;
    
    // $status é do tipo StatusPedido: só aceitará os casos definidos
    private StatusPedido $status; 

    public function __construct(
        int $valorNumero, 
        string $valorCliente,
        StatusPedido $valorStatus)
    {
        $this->numero = $valorNumero;
        $this->cliente = $valorCliente;
        $this->status = $valorStatus;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getCliente(): string
    {
        return $this->cliente;
    }

    public function getStatus():StatusPedido
    {
        return $this->status;
    }

    public function setNumero(int $valorNumero): void 
    {
        $this->numero = $valorNumero;
    }

    public function setCliente(string $valorCliente): void
    { 
        $this->cliente = $valorCliente;
    }

    public function setStatus(StatusPedido $valorStatus): void 
    {
        $this->status = $valorStatus;
    }
}