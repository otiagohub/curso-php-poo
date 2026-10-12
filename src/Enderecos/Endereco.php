<?php
namespace App\Enderecos;

readonly class Endereco 
{
    public function __construct(
        public string $logradouro,
        public string $numero,
        public string $cidade,
        public string $estado
    )
    {
        
    }
}