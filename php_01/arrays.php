<?php

// $ingredientes = ["3 ovos","fermento em pó","açucar","leite"];


// echo $ingredientes[0]."<br/>"; //concatenando com o <br> do HTML 
// echo $ingredientes[1];
$bolo1 = ["3 ovos","fermento em pó","açucar","leite"];

$bolo2 = [...$bolo1, "corante"]; //array spread, avaliable for php 7.4 or later.

// echo $bolo2[4]; //ver bolo2


//Exercicio 

$lista = [
    'nome' => 'Guilherme', 
    'idade' => 90,
       'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida'];


?>