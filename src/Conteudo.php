<?php

// Conteudo é a classe-pai (superclasse) de Filme e Serie
class Conteudo 
{
    // Protected: visível para a classe-pai e classe-filha
    protected string $titulo;
    private string $genero;
    private int $ano;

    public function __construct(
        string $valorTitulo,
        string $valorGenero,
        int $valorAno = 2026
    ) {
        $this->titulo = $valorTitulo;
        $this->genero = $valorGenero;
        $this->ano = $valorAno;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setTitulo(string $valorTitulo): void
    {
        $this->titulo = $valorTitulo;
    }

    public function setAno(int $valorAno): void
    {
        if ($valorAno > 0) {
            $this->ano = $valorAno;
        }
    }

    public function setGenero(string $valorGenero): void
    {
        $this->genero = $valorGenero;
    }

    public function ehClassico(): bool
    {
        return $this->ano < 2000;
    }
}