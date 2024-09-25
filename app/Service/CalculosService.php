<?php

namespace App\Service;

class CalculosService
{
    // Função para calcular o total de cada categoria de investimento do Investimento Fixo
    public function calcularSubtotal($itens)
    {
        return array_reduce($itens, function ($total, $item) {
            return $total + ($item['quantidade'] * $item['valorUnitario']);
        }, 0);
    }

    // Função para calcular o total geral de todas as categorias do Investimento Fixo
    public function calcularTotal($imoveis, $maquinas, $equipamentos, $veiculos, $moveisUtensilios, $computadores)
    {
        return $this->calcularSubtotal($imoveis) +
               $this->calcularSubtotal($maquinas) +
               $this->calcularSubtotal($equipamentos) +
               $this->calcularSubtotal($veiculos) +
               $this->calcularSubtotal($moveisUtensilios) +
               $this->calcularSubtotal($computadores);
    }
    
}