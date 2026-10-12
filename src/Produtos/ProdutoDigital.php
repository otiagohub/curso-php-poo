<?php
namespace App\Produtos;

final class ProdutoDigital extends Produto
{
    public function __construct(
        string $nome, 
        float $preco, 
        private float $tamanhoArquivo
    )
    {
        parent::__construct($nome, $preco);
    }

    public function getTamanhoArquivo(): float
    {
        return $this->tamanhoArquivo;
    }

}