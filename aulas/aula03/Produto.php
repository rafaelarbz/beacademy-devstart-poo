<?php 

declare(strict_types = 1);

class Produto {
    //atributos
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria;

    //metodo de construcao do objeto
    public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
        $this->categoria = $categoria;
    }

    //metodos
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;        
    }

    public function setValor(float $novoValor): void
    {
        if ($novoValor < 0) {
            die('Ops, valor não pode ser negativo');
        }
        $this->valor = $novoValor;
    }

    public function setDescricao(string $novaDescricao): void
    {
        $this->descricao = $novaDescricao;        
    }

    public function setCategoria(Categoria $categoria): void{
        $this->categoria = $categoria;
    }


}

