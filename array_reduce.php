<?php

$movimentacoes_financeiras = [
    [
        'tipo' => 'cashin',
        'valor' => 10
    ],
    [
        'tipo' => 'cashout',
        'valor' => 5
    ],
    [
        'tipo' => 'cashin',
        'valor' => 10
    ],
    [
        'tipo' => 'cashout',
        'valor' => 10
    ],
    [
        'tipo' => 'cashin',
        'valor' => 100
    ]
];

$movimentacao_total = array_reduce($movimentacoes_financeiras, function ($total_movimentado, $movimentacao_atual) {
        return $total_movimentado + $movimentacao_atual['valor'];
}, 0);

$cashin_total = array_reduce($movimentacoes_financeiras, function ($cashin_total, $movimentacao_atual) {
    if ($movimentacao_atual['tipo'] == 'cashin') {
        return $cashin_total + $movimentacao_atual['valor'];
    }
    return $cashin_total;
}, 0);

$cashout_total = array_reduce($movimentacoes_financeiras, function ($cashout_total, $movimentacao_atual) {
    if ($movimentacao_atual['tipo'] == 'cashout') {
        return $cashout_total + $movimentacao_atual['valor'];
    }
    return $cashout_total;
}, 0);

echo "total movimentado: " . $movimentacao_total . PHP_EOL;
echo "total cashin: " . $cashin_total . PHP_EOL;
echo "total cashout: " . $cashout_total . PHP_EOL;
