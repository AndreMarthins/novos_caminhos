<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".


$s1 = "aabcc";
$s2 = "adcaa";
function commonCharacterCount($s1, $s2)
{ 
    $a1 = str_split($s1);
    $a2 = str_split($s2);
    $common = array_intersect($a1, $a2);
    return count($common);
    var_dump($common);
}          