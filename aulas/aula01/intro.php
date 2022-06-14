<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno();
$a1->$nome = 'Rafaela';
$a1->$cpf = '111.111.111-11';
$a1->$nome .= ' Rabelo';


$curso = new Curso();
$curso->$nome = 'Introdução ao PHP';
$curso->$cargaHoraria = 88;
$curso->$areaCurso = 'Tecnologia';

echo "<h1>Aluno: {$a1->$nome}</h1>";