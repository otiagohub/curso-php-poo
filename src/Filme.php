<?php

class Filme
{
    private string $titulo;
    private string $genero;
    private int $ano;

    /* Métodos Getters */
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

    /* Métodos Setters */
    public function setTitulo(string $valorTitulo): void
    {
        $this->titulo = $valorTitulo;
    }

    public function setAno(int $valorAno): void
    {
        if($valorAno > 0) {
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
