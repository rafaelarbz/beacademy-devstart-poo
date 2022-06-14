<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUSA.php';

$cpf = '12345678901234';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$usa = new ValidarUSA();
$usa->validarDocumento($cpf);
