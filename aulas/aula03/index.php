<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Acessórios', 'Acessórios Tech');
$c2 = new Categoria('Acessórios', 'Acessórios Femininos');
$c3 = new Categoria('Acessórios', 'Acessórios Masculinos');

$p1 = new Produto('Fone de Ouvido', 70, $c1);
//$p1->setDescricao('Fone de Ouvido com Fio');
// $p1->setNome('Fone de Ouvido');
// $p1->setValor(70);

$p2 = new Produto('Calça Feminina', 100, $c2);
// $p2->setNome('Calça Feminina');
// $p2->setValor(100);

$p3 = new Produto('Calça Masculina', 100, $c3);
// $p3->setNome('Calça Masculina');

var_dump($p1);
var_dump($p2);
var_dump($p3);