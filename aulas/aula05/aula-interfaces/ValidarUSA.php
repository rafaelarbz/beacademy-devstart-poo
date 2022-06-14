<?php 

declare (strict_types = 1);

class ValidarUSA implements Validar {

    public function validarDocumento(string $documento): void{
        if (strlen($documento) !== 14){ //considera apenas numeros
            die('Ops, Documento USA inválido!');
        }
    }

}