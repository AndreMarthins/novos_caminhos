<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].




function almostIncreasingSequence($sequence) {
  $foundOne = false;

    for ($i = -1, $j = 0, $k = 1; $k < count($sequence); $k++) {
        $deleteCurrent = false;
        if ($sequence[$j] >= $sequence[$k])
        {
            if ($foundOne)
            {
                return false;
            }
            $foundOne = true;
            if ($k > 1 && $sequence[$i] >= $sequence[$k])
            {
                $deleteCurrent = true;
            }
        }
        if (!$foundOne)
        {
            $i = $j;
        }
        if (!$deleteCurrent)
        {
            $j = $k;
        }
    }
    return true;
}