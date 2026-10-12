<?php
namespace App\Produtos;

class Produto
{
    private const string MOEDA = "R$";

    private string $nome;

    // Property Hooks: get (leitura) ou set (escrita)
    public float $preco {
        get {
            return $this->preco;
        }
        set {
            if($value <= 0){
                throw new \Exception('O preço deve ser maior que zero');
            }
            $this->preco = $value;
        }
    }

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    final public function getPrecoFormatado(): string
    {
        return self::MOEDA . " ". number_format($this->preco, 2, ",", ".");
    }
}