<?php

// Classe Filme é uma classe-filha (subclasse)
class Filme extends Conteudo
{
    private int $duracao;

    public function __construct(
        string $valorTitulo,
        string $valorGenero,
        int $valorAno,
        int $valorDuracao
    ) {
        // Chamando o construtor da classe-pai (Conteudo) e repassando os valores
        parent::__construct($valorTitulo, $valorGenero, $valorAno);
        
        // Atribuição de $valorDuracao à propriedade $duracao
        $this->duracao = $valorDuracao;
    }

    public function getDuracao(): int
    {
        return $this->duracao;
    }

    public function setDuracao(int $valorDuracao): void 
    {
        if($valorDuracao > 0) $this->duracao = $valorDuracao;
    }

    public function getDescricao(): string 
    {
        // De Volta para o Futuro é um filme com 116 minutos de duração.
        return "$this->titulo é um filme com $this->duracao minutos de duração";
    }
}
