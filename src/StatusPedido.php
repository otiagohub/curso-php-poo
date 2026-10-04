<?php
// Cada caso representa um status permitido e possui um texto associado
enum StatusPedido: string
{
    case Pendente = "Pendente";
    case AguardandoPagamento = "Aguardando pagamento";
    case Pago = "Pago";
    case EmPreparacao = "Em preparação";
    case SaiuParaEntrega = "Saiu para entrega";
}