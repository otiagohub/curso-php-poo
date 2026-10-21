<?php
namespace App\Locacoes;

enum StatusLocacao: string
{
    case Ativa = 'Ativa';
    case Finalizada = 'Finalizada';
}