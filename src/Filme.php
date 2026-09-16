<?php

class Filme
{
    // Propriedades
    public string $titulo;
    public string $genero;
    public int $ano;

    // Método
    public function ehClassico(): bool
    {
        return $this->ano < 2000;
    }
}
