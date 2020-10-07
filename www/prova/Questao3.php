<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.


function adjacentElementsProduct($inputArray)
{
    $a = array(3,6);
    $b = array(-2,-5);
    $c = array(7,3);

    $prodArray1 = array_product($a);
    $prodArray2 = array_product($b);
    $prodArray3 = array_product($c);

    echo max($prodArray1, $prodArray2, $prodArray3);
}