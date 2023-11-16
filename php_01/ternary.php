<?php

/*
$idade = 20;

$resultado = $idade > 18 ? "Maior de idade!" : "Menor de idade";

echo $resultado;
*/

$nome = 'Guilherme';

$nomeCompleto = $nome;
//verificar se existe sobrenome
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; //or null

$nomeCompleto .= $sobrenome ?? null; //mesma coisa que a linha de cima, porém coloca só o lado negativo.

echo $nomeCompleto;


?>