<?php

include 'Produto.php';

$p1 = new Produto();
$p1->alterarNome('Fone de Ouvido');
$p1->alterarValor(-150);

// $p2 = new Produto();
// $p2->$nome = 'Mouse USB';
// $p2->$valor = -70;

var_dump($p1);
// var_dump($p2);