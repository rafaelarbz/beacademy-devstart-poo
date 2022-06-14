<?php 

declare (strict_types = 1);

class ValidarBR implements Validar {

    public function validarDocumento(string $documento): void{
        if (strlen($documento) !== 11){ //considera apenas numeros
            die('Ops, CPF inválido!');
        }
    }

}