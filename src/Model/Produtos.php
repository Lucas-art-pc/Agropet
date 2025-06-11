<?php 

class Produtos{
    private ?int $id;
    private string $nome;
    private string $descricao;
    private float $preco;
    private int $quantidade;
    private string $categoria;
    private ?string $imagem;

    public function __construct($id, $nome, $descricao, $preco, $quantidade, $categoria, $imagem){
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
        $this->imagem = $imagem;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function getImagemFormatada(){
        return "img/" . $this->imagem;
    }

    public function getPrecoFormatado(){
        return "R$" . number_format($this->preco, 2)
;    }
}