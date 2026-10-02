<?php

/* Desafios:
- Programar um método getDescricao que deve exibir o título da série e a quantidade de temporadas que possui */

class Serie extends Conteudo 
{
    private int $temporadas;

    public function __construct(
        string $valorTitulo,
        string $valorGenero,
        int $valorAno,
        int $valorTemporadas
    ) {
        parent::__construct($valorTitulo, $valorGenero, $valorAno);
        $this->temporadas = $valorTemporadas;
    }

    public function getTemporadas():int 
    {
        return $this->temporadas;
    }

    public function setTemporadas(int $valorTemporadas):void
    {
        if($valorTemporadas > 0) $this->temporadas = $valorTemporadas;
    }

    public function getDescricao():string 
    {
        return "$this->titulo é uma série com $this->temporadas temporadas.";
    }
}