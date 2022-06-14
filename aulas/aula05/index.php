<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'ClienteVip.php';
include 'Validar.php';

$c1 = new Cliente('chiquim@mail.com', '123456');
$c1->setNome('Chiquim');
$c1->setDataCadastro('13/06/2019');

$cpf = '1234';

$validador = new Validar();
$validador->validarCpf($cpf);

$c1->setCpf($cpf);

$g1 =  new Gestor('zezim@mail.com', '123456', 6000);
$g1->setNome('Zezim');

$gg1 = new GestorGeral('maria@mail.com', 'mgg1pw', 9000);

$usu = new Usuario('hacker@mail.com', 'hackerpw');

//$cv = new ClienteVip('cv@mail.com', 'cvpw');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($usu);
var_dump($cv);