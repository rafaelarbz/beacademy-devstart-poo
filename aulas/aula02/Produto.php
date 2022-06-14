<?php 

declare(strict_types = 1);

class Produto {
    //atributos
    private string $nome;
    private float $valor;

    //metodos
    public function pegarNome(): string
    {
        return $this->$nome;
    }

    public function alterarNome(string $novoNome): void
    {
        $this->$nome = $novoNome;        
    }

    public function alterarValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            die('Ops, valor não pode ser negativo');
        }
        $this->$valor = $novoValor;
    }

}

